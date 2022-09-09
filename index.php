<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $myfile = fopen("notes", 'a+');
    $req = implode(" ",$_POST);
    $time = date('m/d/Y h:i:s a');
    fwrite($myfile, $time.' => '.$req."\n");
    fclose($myfile);
}
else{
    $myfile = fopen("notes", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
}
