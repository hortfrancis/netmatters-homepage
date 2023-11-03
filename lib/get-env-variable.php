<?php

function getEnvironmentalVariable($variableName)
{
    // Get the entire `.env` file as a string
    $contents = file_get_contents(__DIR__ . '/../.env');

    // Split the string into an array of lines
    $lines = explode("\n", $contents);

    foreach ($lines as $line) {
        // If the line contains the requested environmental variable
        if (strpos($line, $variableName) !== false) {
            // Get the value and return it
            $explodedLine = explode('=', $line);
            return $explodedLine[1];
        } else {
            return false;
        }
    }
}