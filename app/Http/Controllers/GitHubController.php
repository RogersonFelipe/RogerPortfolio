<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GithubController extends Controller
{
    public function repos()
    {
        $username = env('GITHUB_USERNAME');
        $token = env('GITHUB_TOKEN');

        if (!$username) {
            return response()->json([
                'error' => 'GITHUB_USERNAME não configurado'
            ], 500);
        }

        $response = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => $token ? "Bearer {$token}" : null,
        ])->get("https://api.github.com/users/{$username}/repos");

        if ($response->failed()) {
            return response()->json([
                'error' => 'Erro ao buscar repositórios',
                'github_response' => $response->json(),
            ], $response->status());
        }

        return response()->json($response->json());
    }
}
