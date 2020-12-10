<?php
    include "../conn.php";
    $file = file_get_contents("export_file.html");
    foreach(f("SELECT * FROM `replace_url`") as $data) {
        $file = str_ireplace($data["prefix"] . $data["original_url"], $data["replace_url"], $file);
        $file = str_replace( "./", "", $file);
    }
    echo $file;