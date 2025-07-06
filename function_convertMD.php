<?php 

function convertMD(string $input_file) : string {
    $input_string = file_get_contents($input_file);

    $input_string = str_replace("\n", "<br>", $input_string);

    return $input_string;
}

