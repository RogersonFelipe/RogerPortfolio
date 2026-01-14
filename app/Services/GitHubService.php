<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class GitHubService
{
    public function getRepositories()
    {
        return Cache::remember('github_repos', 3600, function () {
            return Http::withToken(config('services.github.token'))
                ->withHeaders([
                    'Accept' => 'application/vnd.github+json',
                ])
                ->get(
                    'https://api.github.com/users/' .
                    config('services.github.username') .
                    '/repos'
                )
                ->json();
        });
    }
}
