<?php

namespace App\Http\Controllers;

use phpseclib\Net\SSH2;
use phpseclib\Crypt\RSA;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class GitDeployController extends Controller
{
    public function pull(Request $request)
    {
        if (
            !is_null(env('AUTO_PULL_SECRET')) &&
            !is_null(env('AUTO_PULL_DIR')) &&
            !is_null($request->secret) &&
            env('AUTO_PULL_SECRET') === $request->secret
        ) {
            return $this->processPull();
        }

        return response()->json([
            'status' => false,
            'message' => 'Please check .env variables.',
            'data' => [],
            'errors' => []
        ]);
    }

    private function connetSSHWithKey()
    {
        $privateKey = file_get_contents(base_path(env('AUTO_PULL_SSH_PRIVATE_KEY')));

        $key = new RSA();
        $key->loadKey($privateKey);

        $ssh = new SSH2(env('AUTO_PULL_SERVER_IP'));
        if (!$ssh->login(env('AUTO_PULL_SSH_USER'), $key)) {
            return response()->json([
                'status' => false,
                'message' => 'Connection failed with rsa key.',
                'data' => [],
                'errors' => $ssh->getErrors()
            ]);
        }

        return $this->processPull($ssh);
    }

    private function connetSSHWithPassword()
    {
        $ssh = new SSH2(env('AUTO_PULL_SERVER_IP'));
        if (!$ssh->login(env('AUTO_PULL_SSH_USER'), env('AUTO_PULL_SSH_USER_PASS'))) {
            return response()->json([
                'status' => false,
                'message' => 'Connection failed with password.',
                'data' => [],
                'errors' => $ssh->getErrors()
            ]);
        }

        return $this->processPull($ssh);
    }

    private function processPull($ssh)
    {
        $messages = $ssh->exec('cd ' . env('AUTO_PULL_DIR') . ' && git stash save --keep-index && git pull');
        $ssh->exec('exit');

        return response()->json([
            'status' => true,
            'message' => 'Success!',
            'data' => (array)array_filter((array)explode("\n", $messages)),
            'errors' => []
        ]);
    }
}
