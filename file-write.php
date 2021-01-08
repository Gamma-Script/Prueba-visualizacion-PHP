<?php
    header('Access-Control-Allow-Origin: *');

    $editorCode = $_POST['input'];
    $fp = fopen("code-editable.php", "w") or die("Unable to open file!");
    fwrite($fp, $editorCode);
    fclose($fp);
?>