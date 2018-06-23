<?php

session_start();

$link = mysqli_connect("localhost", "root", "Varden97", "Glosary");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$header = mysqli_real_escape_string($link, $_REQUEST['header']);
$data = mysqli_real_escape_string($link, $_REQUEST['data']);

$name = strip_tags($name);
$header = strip_tags($header);
$data = strip_tags($data);

if (isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]) {
// attempt insert query execution
    $sql = "INSERT INTO Glosary (name, header, data) VALUES ('$name', '$header', '$data')";
    if (!empty($name) and !empty($header) and !empty($data) and mysqli_query($link, $sql)) {
        header("Location: ../commentary?status=done");
        exit();
    } else {
        header("Location: ../commentary?status=unk_err");
        exit();
    }
} else {
    header("Location: ../commentary?status=cpt_err");
    exit();
}

mysqli_close($link);
?>