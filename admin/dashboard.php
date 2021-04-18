<?php
include('session.php');

$count_data = [];

$feedback_sql = "SELECT * FROM student_feedback";
$feedback_result = $conn->query($feedback_sql);

$count_sql = "SELECT * FROM teachers";
$count_result = $conn->query($count_sql);
while ($count_row = $count_result->fetch_assoc()) {
    $count_in_sql = "SELECT count(t_id) as count_id FROM student_feedback WHERE t_id = " . $count_row['t_id'] . "";
    $count_in_result = $conn->query($count_in_sql);
    while ($count_in_row = $count_in_result->fetch_assoc()) {
        $count_data[$count_row['t_id']] = $count_in_row['count_id'];
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, 
    initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="dashboard_style.css">
    <script src="../assets/js/app.js"></script>
    <title>Dashboard</title>
</head>

<body>
    <?php include_once('aside/header.php'); ?>
    <div class="kt-dashboard-div">
        <div class="kt-dashboard-title">Student Feedback</div>
        <table class="kt-dashboard-table">
            <thead>
                <tr>
                    <th>Teacher Name</th>
                    <th>Student Name</th>
                    <th>Teaching methods</th>
                    <th>Facilities provided</th>
                    <th>Different clubs</th>
                    <th>Teaching staff</th>
                    <th>Cleanliness</th>
                    <th>Projects provided</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($feedback_result->num_rows > 0) {
                    while ($feedback_row = $feedback_result->fetch_assoc()) {
                        $teachers_sql = "SELECT * FROM teachers WHERE t_id = " . $feedback_row['t_id'] . "";
                        $teachers_result = $conn->query($teachers_sql);
                        while ($teachers_row = $teachers_result->fetch_assoc()) {

                            echo "<tr>";
                            echo "<td>" . $teachers_row["t_name"] . "</td>";
                        }

                        $students_sql = "SELECT * FROM students where s_id = " . $feedback_row['s_id'] . "";
                        $students_result = $conn->query($students_sql);
                        while ($students_row = $students_result->fetch_assoc()) {
                            echo "<td>" . $students_row["s_name"] . "</td>";
                        }
                        echo "<td>" . $feedback_row["f_question1"] . "</td>";
                        echo "<td>" . $feedback_row["f_question2"] . "</td>";
                        echo "<td>" . $feedback_row["f_question3"] . "</td>";
                        echo "<td>" . $feedback_row["f_question4"] . "</td>";
                        echo "<td>" . $feedback_row["f_question5"] . "</td>";
                        echo "<td>" . $feedback_row["f_question6"] . "</td>";
                        echo "<td>" . $feedback_row["f_comment"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td>NA</td>";
                    echo "<td>NA</td>";
                    echo "<td>NA</td>";
                    echo "<td>NA</td>";
                    echo "<td>NA</td>";
                    echo "<td>NA</td>";
                    echo "<td>NA</td>";
                    echo "<td>NA</td>";
                    echo "<td>NA</td>";
                    echo "</tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>