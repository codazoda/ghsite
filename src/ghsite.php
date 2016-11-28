#!/usr/local/php5/bin/php
<?php

require __DIR__ . '/../vendor/parsedown/Parsedown.php';

// TODO: If there wasn't a first argument show the syntax
if (empty($argv[1])) {

    die('ghpages "{app name}" {domain}' . "\n");

} else {

    // If the README.txt file exists, process it
    if (file_exists('README.md')) {
        $Parsedown = new Parsedown();
        $readmeText = file_get_contents('README.md');
    } else {
        die('Error: No README.md file in the current directory.');
    }

    // Load the template
    $template = file_get_contents(__DIR__ . '/index.html');

    // Merge the readme and app name into the index file
    $html = str_replace('{readme}', $Parsedown->text($readmeText), $template);
    $html = str_replace('{app}', $argv[1], $html);

    // TODO: If the docs folder doesn't exist
    // TODO: Create it

    // Write the html to the index file
    file_put_contents('./docs/index.html', $html);

}

if (!empty($argv[2])) {

    file_put_contents('./docs/CNAME', $argv[2]);

}
