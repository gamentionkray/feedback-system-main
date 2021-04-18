<?php
include('includes/session.php');

$hs = 0;
$s = 0;
$n = 0;
$d = 0;
$hd = 0;

//Feedback count
$sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = " . $login_session_id;
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);

//Feedback 1
//Highly Satisfied Feedback 1
$feedback1_hs_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question1 = 'Highly Satisfied'";
$feedback1_hs_result = $conn->query($feedback1_hs_sql);
$feedback1_hs_row = $feedback1_hs_result->fetch_array(MYSQLI_ASSOC);

//Satisfied Feedback 1
$feedback1_s_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question1 = 'Satisfied'";
$feedback1_s_result = $conn->query($feedback1_s_sql);
$feedback1_s_row = $feedback1_s_result->fetch_array(MYSQLI_ASSOC);

//Neutral Feedback 1
$feedback1_n_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question1 = 'Neutral'";
$feedback1_n_result = $conn->query($feedback1_n_sql);
$feedback1_n_row = $feedback1_n_result->fetch_array(MYSQLI_ASSOC);

//Dissatisfied Feedback 1
$feedback1_d_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question1 = 'Dissatisfied'";
$feedback1_d_result = $conn->query($feedback1_d_sql);
$feedback1_d_row = $feedback1_d_result->fetch_array(MYSQLI_ASSOC);

//Highly Dissatisfied Feedback 1
$feedback1_hd_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question1 = 'Highly Dissatisfied'";
$feedback1_hd_result = $conn->query($feedback1_hd_sql);
$feedback1_hd_row = $feedback1_hd_result->fetch_array(MYSQLI_ASSOC);





//Feedback 2
//Highly Satisfied Feedback 2
$feedback2_hs_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question2 = 'Highly Satisfied'";
$feedback2_hs_result = $conn->query($feedback2_hs_sql);
$feedback2_hs_row = $feedback2_hs_result->fetch_array(MYSQLI_ASSOC);

//Satisfied Feedback 2
$feedback2_s_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question2 = 'Satisfied'";
$feedback2_s_result = $conn->query($feedback2_s_sql);
$feedback2_s_row = $feedback2_s_result->fetch_array(MYSQLI_ASSOC);

//Neutral Feedback 2
$feedback2_n_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question2 = 'Neutral'";
$feedback2_n_result = $conn->query($feedback2_n_sql);
$feedback2_n_row = $feedback2_n_result->fetch_array(MYSQLI_ASSOC);

//Dissatisfied Feedback 2
$feedback2_d_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question2 = 'Dissatisfied'";
$feedback2_d_result = $conn->query($feedback2_d_sql);
$feedback2_d_row = $feedback2_d_result->fetch_array(MYSQLI_ASSOC);

//Highly Dissatisfied Feedback 2
$feedback2_hd_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question2 = 'Highly Dissatisfied'";
$feedback2_hd_result = $conn->query($feedback2_hd_sql);
$feedback2_hd_row = $feedback2_hd_result->fetch_array(MYSQLI_ASSOC);





//Feedback 3
//Highly Satisfied Feedback 3
$feedback3_hs_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question3 = 'Highly Satisfied'";
$feedback3_hs_result = $conn->query($feedback3_hs_sql);
$feedback3_hs_row = $feedback3_hs_result->fetch_array(MYSQLI_ASSOC);

//Satisfied Feedback 3
$feedback3_s_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question3 = 'Satisfied'";
$feedback3_s_result = $conn->query($feedback3_s_sql);
$feedback3_s_row = $feedback3_s_result->fetch_array(MYSQLI_ASSOC);

//Neutral Feedback 3
$feedback3_n_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question3 = 'Neutral'";
$feedback3_n_result = $conn->query($feedback3_n_sql);
$feedback3_n_row = $feedback3_n_result->fetch_array(MYSQLI_ASSOC);

//Dissatisfied Feedback 3
$feedback3_d_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question3 = 'Dissatisfied'";
$feedback3_d_result = $conn->query($feedback3_d_sql);
$feedback3_d_row = $feedback3_d_result->fetch_array(MYSQLI_ASSOC);

//Highly Dissatisfied Feedback 3
$feedback3_hd_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question3 = 'Highly Dissatisfied'";
$feedback3_hd_result = $conn->query($feedback3_hd_sql);
$feedback3_hd_row = $feedback3_hd_result->fetch_array(MYSQLI_ASSOC);





//Feedback 4
//Highly Satisfied Feedback 4
$feedback4_hs_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question4 = 'Highly Satisfied'";
$feedback4_hs_result = $conn->query($feedback4_hs_sql);
$feedback4_hs_row = $feedback4_hs_result->fetch_array(MYSQLI_ASSOC);

//Satisfied Feedback 4
$feedback4_s_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question4 = 'Satisfied'";
$feedback4_s_result = $conn->query($feedback4_s_sql);
$feedback4_s_row = $feedback4_s_result->fetch_array(MYSQLI_ASSOC);

//Neutral Feedback 4
$feedback4_n_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question4 = 'Neutral'";
$feedback4_n_result = $conn->query($feedback4_n_sql);
$feedback4_n_row = $feedback4_n_result->fetch_array(MYSQLI_ASSOC);

//Dissatisfied Feedback 4
$feedback4_d_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question4 = 'Dissatisfied'";
$feedback4_d_result = $conn->query($feedback4_d_sql);
$feedback4_d_row = $feedback4_d_result->fetch_array(MYSQLI_ASSOC);

//Highly Dissatisfied Feedback 4
$feedback4_hd_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question4 = 'Highly Dissatisfied'";
$feedback4_hd_result = $conn->query($feedback4_hd_sql);
$feedback4_hd_row = $feedback4_hd_result->fetch_array(MYSQLI_ASSOC);





//Feedback 5
//Highly Satisfied Feedback 5
$feedback5_hs_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question5 = 'Highly Satisfied'";
$feedback5_hs_result = $conn->query($feedback5_hs_sql);
$feedback5_hs_row = $feedback5_hs_result->fetch_array(MYSQLI_ASSOC);

//Satisfied Feedback 5
$feedback5_s_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question5 = 'Satisfied'";
$feedback5_s_result = $conn->query($feedback5_s_sql);
$feedback5_s_row = $feedback5_s_result->fetch_array(MYSQLI_ASSOC);

//Neutral Feedback 5
$feedback5_n_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question5 = 'Neutral'";
$feedback5_n_result = $conn->query($feedback5_n_sql);
$feedback5_n_row = $feedback5_n_result->fetch_array(MYSQLI_ASSOC);

//Dissatisfied Feedback 5
$feedback5_d_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question5 = 'Dissatisfied'";
$feedback5_d_result = $conn->query($feedback5_d_sql);
$feedback5_d_row = $feedback5_d_result->fetch_array(MYSQLI_ASSOC);

//Highly Dissatisfied Feedback 5
$feedback5_hd_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question5 = 'Highly Dissatisfied'";
$feedback5_hd_result = $conn->query($feedback5_hd_sql);
$feedback5_hd_row = $feedback5_hd_result->fetch_array(MYSQLI_ASSOC);





//Feedback 6
//Highly Satisfied Feedback 6
$feedback6_hs_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question6 = 'Highly Satisfied'";
$feedback6_hs_result = $conn->query($feedback6_hs_sql);
$feedback6_hs_row = $feedback6_hs_result->fetch_array(MYSQLI_ASSOC);

//Satisfied Feedback 6
$feedback6_s_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question6 = 'Satisfied'";
$feedback6_s_result = $conn->query($feedback6_s_sql);
$feedback6_s_row = $feedback6_s_result->fetch_array(MYSQLI_ASSOC);

//Neutral Feedback 6
$feedback6_n_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question6 = 'Neutral'";
$feedback6_n_result = $conn->query($feedback6_n_sql);
$feedback6_n_row = $feedback6_n_result->fetch_array(MYSQLI_ASSOC);

//Dissatisfied Feedback 6
$feedback6_d_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question6 = 'Dissatisfied'";
$feedback6_d_result = $conn->query($feedback6_d_sql);
$feedback6_d_row = $feedback6_d_result->fetch_array(MYSQLI_ASSOC);

//Highly Dissatisfied Feedback 6
$feedback6_hd_sql = "SELECT count(t_id) as t_count FROM student_feedback WHERE t_id = $login_session_id AND f_question6 = 'Highly Dissatisfied'";
$feedback6_hd_result = $conn->query($feedback6_hd_sql);
$feedback6_hd_row = $feedback6_hd_result->fetch_array(MYSQLI_ASSOC);

//Total count
$hs = $feedback1_hs_row['t_count'] + $feedback2_hs_row['t_count'] + $feedback3_hs_row['t_count'] + $feedback4_hs_row['t_count'] + $feedback5_hs_row['t_count'] + $feedback6_hs_row['t_count'];
$s = $feedback1_s_row['t_count'] + $feedback2_s_row['t_count'] + $feedback3_s_row['t_count'] + $feedback4_s_row['t_count'] + $feedback5_s_row['t_count'] + $feedback6_s_row['t_count'];
$n = $feedback1_n_row['t_count'] + $feedback2_n_row['t_count'] + $feedback3_n_row['t_count'] + $feedback4_n_row['t_count'] + $feedback5_n_row['t_count'] + $feedback6_n_row['t_count'];
$d = $feedback1_d_row['t_count'] + $feedback2_d_row['t_count'] + $feedback3_d_row['t_count'] + $feedback4_d_row['t_count'] + $feedback5_d_row['t_count'] + $feedback6_d_row['t_count'];
$hd = $feedback1_hd_row['t_count'] + $feedback2_hd_row['t_count'] + $feedback3_hd_row['t_count'] + $feedback4_hd_row['t_count'] + $feedback5_hd_row['t_count'] + $feedback6_hd_row['t_count'];
