<?php

$basePath = dirname(__DIR__);

$env = array_reduce(array_filter(file("$basePath/.env"), function ($file) {
    return strpos($file, 'PROJECT_NAME=') === 0;
}), function ($carry, $file) {
    $parts = explode('=', $file);
    $carry[$parts[0]] = trim($parts[1]);
    return $carry;
}, []);

$projectName = isset($env['PROJECT_NAME']) && strlen($env['PROJECT_NAME'])
    ? $env['PROJECT_NAME']
    : basename($basePath);

$projectName = strtolower($projectName); // ex "project-name"
$uppercaseProjectName = strtoupper(str_replace('-', '_', $projectName)); // ex "PROJECT_NAME"

$files = [
    "$basePath/docker/nginx/conf.d/default.conf",
    "$basePath/docker/pgsql/Dockerfile",
    "$basePath/.env",
    "$basePath/.env.example",
    "$basePath/composer.json",
    "$basePath/docker-compose.yml",
    "$basePath/README.md",
];

foreach ($files as $file) {
    if (file_exists($file)) {
        file_put_contents($file, str_replace(
            ['project-name', 'PROJECT-NAME', 'digbang/laravel-api-project'],
            [$projectName, $uppercaseProjectName, "$projectName/$projectName"],
            file_get_contents($file)
        ));
    }
}
