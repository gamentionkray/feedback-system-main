<?php
include('includes/session.php');

if (isset($_POST['submit_feedback'])) {
    if (isset($_POST['feedback1']) && isset($_POST['feedback2']) && isset($_POST['feedback3']) && isset($_POST['feedback4']) && isset($_POST['feedback5']) && isset($_POST['feedback6'])) {
        $s_id = $conn->real_escape_string($login_session_id);
        $t_id = $conn->real_escape_string($_GET["t_id"]);
        $comment = $conn->real_escape_string($_POST["comment"]);
        $feedback1 = $conn->real_escape_string($_POST["feedback1"]);
        $feedback2 = $conn->real_escape_string($_POST["feedback2"]);
        $feedback3 = $conn->real_escape_string($_POST["feedback3"]);
        $feedback4 = $conn->real_escape_string($_POST["feedback4"]);
        $feedback5 = $conn->real_escape_string($_POST["feedback5"]);
        $feedback6 = $conn->real_escape_string($_POST["feedback6"]);

        if (empty($errors)) {
            $sql = "INSERT INTO student_feedback (s_id, t_id, f_comment, f_question1, f_question2, f_question3, f_question4, f_question5, f_question6) VALUES ('$login_session_id', '" . $_SESSION["teacher_id"] . "', '$comment', '$feedback1', '$feedback2', '$feedback3', '$feedback4', '$feedback5', '$feedback6')";

            if ($conn->query($sql)) {
                unset($_SESSION['teacher_id']);
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        $error = "Fields cannot be empty!";
        array_push($errors, $error);
    }
}
