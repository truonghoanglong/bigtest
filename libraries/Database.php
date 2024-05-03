<?php
session_start();
header("Content-type: text/html; charset=utf-8");
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bigtest";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


if (!isset($_SESSION['user'])) {
    header("location:/MILKCO/login/");
}
  mysqli_set_charset($conn, 'UTF8');
