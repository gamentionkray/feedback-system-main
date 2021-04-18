<?php
include("../includes/connection.php");
session_start();

$user_check = $_SESSION['admin_login'];

$ses_sql = "select username from admin_login where username = '$user_check' ";

$ses_res = $conn->query($ses_sql);

$row = $ses_res->fetch_array(MYSQLI_ASSOC);

$login_session = $row['username'];

if (!isset($_SESSION['admin_login'])) {
    header("location:index.php");
    die();
}
