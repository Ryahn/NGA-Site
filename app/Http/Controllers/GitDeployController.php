<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Process\Process;


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
            return $this->processPull($request);
        }

        return response()->json([
            'status' => false,
            'message' => 'Please check .env variables.',
            'data' => [],
            'errors' => []
        ]);
    }


    private function processPull($request)
    {
        $gitPaypload = $request->getContent();
        $gitHash = $request->header('X-Hub-Signature');
        $localToken = config('app.deploy_secret');
        $localToken = 'sha1=' . hash_hmac('sha1', $gitPaypload, $localToken, false);

        if (hash_equals($gitHash, $localHash)) {
            $root_path = base_path();
            $process = new Process('cd ' . $root_path . '; ./deploy.sh');
            $messages = $process->run(function ($type, $buffer) {
                return $buffer;
            });

            return response()->json([
                'status' => true,
                'message' => 'Success!',
                'data' => (array)array_filter((array)explode("\n", $messages)),
                'errors' => []
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Hash do not match',
            'data' => [],
            'errors' => []
        ]);

    }
}
