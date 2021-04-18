<?php
session_start();
include("connection.php");

$errors = [];

$user_check = $_SESSION['student_login'];

$ses_sql = "select s_id, s_name, s_email from students where s_email = '$user_check' ";

$ses_res = $conn->query($ses_sql);

$row = $ses_res->fetch_array(MYSQLI_ASSOC);

$login_session_id = (int)$row['s_id'];

$login_session_email = $row['s_email'];

$login_session_name = $row['s_name'];


if (!isset($_SESSION['student_login'])) {
    header("location:index.php");
    die();
}
