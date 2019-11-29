<?php
namespace Deployer;

require 'recipe/laravel.php';
// Project name
set('application', 'laravel-app');

// Project repository
set('repository', 'https://gitlab.com/EdgeSight_Solution/laravel-app.git');

// Hosts

host('104.248.144.124')
    ->user('deployer')
    ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/html/laravel-app');

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');

