<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/ Register Form</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <div class="page-wrapper">
        <div class="well">