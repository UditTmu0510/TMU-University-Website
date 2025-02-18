<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GitWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $secret = "@@TMUwebsite99";
        $signature = $request->header('X-Hub-Signature-256');
        $payload = $request->getContent();

        // Verify signature
        $hash = "sha256=" . hash_hmac('sha256', $payload, $secret);
        if (!hash_equals($hash, $signature)) {
            abort(403, "Invalid signature");
        }

        // Log webhook event
        Log::info("GitHub Webhook Triggered");

        // Run Git pull
        exec("cd /home/tmuac1/public_html/main.tmu.ac.in && git pull origin main 2>&1", $output, $return_var);
        
        Log::info("Git Pull Output: " . implode("\n", $output));

        return response()->json(["message" => "Git pull executed"]);
    }
}
