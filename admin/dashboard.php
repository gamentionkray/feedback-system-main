<?php
include('session.php');

$sql = "SELECT * FROM user_feedback";
$result = $conn->query($sql);
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Feedback 1</th>
                    <th>Feedback 2</th>
                    <th>Feedback 3</th>
                    <th>Feedback 4</th>
                    <th>Feedback 5</th>
                    <th>Feedback 6</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["user_name"] . "</td>";
                        echo "<td>" . $row["user_email"] . "</td>";
                        echo "<td>" . $row["user_mobile"] . "</td>";
                        echo "<td>" . $row["user_feedback1"] . "</td>";
                        echo "<td>" . $row["user_feedback2"] . "</td>";
                        echo "<td>" . $row["user_feedback3"] . "</td>";
                        echo "<td>" . $row["user_feedback4"] . "</td>";
                        echo "<td>" . $row["user_feedback5"] . "</td>";
                        echo "<td>" . $row["user_feedback6"] . "</td>";
                        echo "<td>" . $row["user_comments"] . "</td>";
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