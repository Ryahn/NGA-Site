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
            !is_null(config('app.deploy_secret')) &&
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
        $localHash = 'sha1=' . hash_hmac('sha1', $gitPaypload, $localToken, false);

        if (hash_equals($gitHash, $localHash)) {
            $json = json_decode($request->getContent());
            return response()->json([
                'status' => true,
                'message' => 'Success!',
                'data' => $json,
                'errors' => []
            ]);
            // $workDir = env('APP_DEPLOY_DIR');
            // $process = Process::fromShellCommandline($workDir . '/deploy.sh');
            // $process->setWorkingDirectory($workDir);
            // $process->run();
            // $messages = $process->getOutput();

            // if ($process->isSuccessful()) {
            //     return response()->json([
            //         'status' => true,
            //         'message' => 'Success!',
            //         'data' => (array)array_filter((array)explode("\n", $messages)),
            //         'errors' => []
            //     ]);
            // }

            // return response()->json([
            //     'status' => false,
            //     'message' => 'Error!',
            //     'data' => (array)array_filter((array)explode("\n", $messages)),
            //     'errors' => []
            // ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Hashes do not match. Please check that they match.',
            'data' => [],
            'errors' => []
        ]);
    }
}
