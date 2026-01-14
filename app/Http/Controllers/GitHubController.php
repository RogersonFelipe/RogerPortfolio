<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GitHubService;

class GitHubController extends Controller
{
    public function repos(GitHubService $gitHubService)
    {
        return response()->json(
            $gitHubService->getRepositories()
        );
    }
}
