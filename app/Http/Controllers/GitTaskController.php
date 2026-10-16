<?php

namespace App\\Http\\Controllers;

use Illuminate\\Contracts\\View\\View;

class GitTaskController extends Controller
{
    public function index(): View
    {
        $folders = [
            ['name' => 'app/', 'purpose' => 'Main application code, including controllers and models.'],
            ['name' => 'routes/', 'purpose' => 'Defines URLs and connects them to actions.'],
            ['name' => 'resources/', 'purpose' => 'Blade views and frontend source assets.'],
            ['name' => 'public/', 'purpose' => 'Public entry point and public assets.'],
            ['name' => 'database/', 'purpose' => 'Migrations, seeders, and factories.'],
            ['name' => 'config/', 'purpose' => 'Application and service settings.'],
            ['name' => 'storage/', 'purpose' => 'Logs, cache, and generated files.'],
            ['name' => 'bootstrap/', 'purpose' => 'Files used to initialize the application.'],
            ['name' => 'tests/', 'purpose' => 'Automated tests.'],
            ['name' => 'vendor/', 'purpose' => 'Composer-installed dependencies; normally not edited manually.'],
        ];

        $gitCommands = [
            ['name' => 'Commit', 'command' => 'git add <files> && git commit -m "Describe change"', 'purpose' => 'Records staged changes in local Git history.'],
            ['name' => 'Push', 'command' => 'git push', 'purpose' => 'Sends local commits to the configured remote repository.'],
            ['name' => 'Pull', 'command' => 'git pull', 'purpose' => 'Fetches remote changes and integrates them into the current branch.'],
        ];

        return view('git-task', compact('folders', 'gitCommands'));
    }
}
