<?php
include('includes/session.php');

//Show table

$arr1 = [];
$arr2 = [];

$sql1 = "SELECT TE.t_name as t_name FROM teachers TE";
$sql2 = "SELECT TE.t_name as t_name FROM students ST, teachers TE, `student_feedback` SFB WHERE SFB.s_id=ST.s_id AND SFB.t_id=TE.t_id AND SFB.s_id = $login_session_id";

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if ($result1->num_rows > 0) {
    while ($row1 = $result1->fetch_assoc()) {
        array_push($arr1, $row1['t_name']);
    }
}

if ($result2->num_rows > 0) {
    while ($row2 = $result2->fetch_assoc()) {
        array_push($arr2, $row2['t_name']);
    }
}

$diff = array_diff($arr1, $arr2);
