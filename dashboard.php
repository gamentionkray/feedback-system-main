<?php
include('includes/dashboard-functions.php');
$sql = "SELECT TE.t_name as t_name, TE.t_id as t_id FROM teachers TE";
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
    <link rel="stylesheet" href="assets/css/style-dashboard.css">
    <script src="assets/js/app.js"></script>
    <title>Student Dashboard</title>
</head>

<body>
    <div class="kt-header-div">
        <a href="dashboard.php" class="kt-header-logo"></a>
        <div class="kt-header-navlinks">
            <!-- <a href="#">Dashboard</a>
        <a href="#">Something</a>
        <a href="#">Something</a> -->
        </div>
        <a class="kt-logout" href="logout.php">Logout</a>
    </div>
    <div class="kt-dashboard-div">
        <div class="kt-dashboard-title">Hello, <?= $login_session_name; ?>!</div>
        <div class="kt-dashboard-sub-title mt-20">Please give the feedback to the following teachers!</div>
        <table class="kt-dashboard-table">
            <thead>
                <tr>
                    <th>Teacher Name</th>
                    <th>Feedback given?</th>
                    <th></th>
                </tr>
            </thead>
            <!-- <tbody>
                <tr>
                    <td>NA</td>
                    <td>NA</td>
                    <td>NA</td>
                </tr>
            </tbody> -->
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["t_name"] . "</td>"; ?>
                    <td>
                        <?php
                        if (!empty($diff)) {
                            foreach ($diff as $value) {
                                if ($value == $row["t_name"])
                                    echo "No";
                            }
                        } else {
                            echo "Yes";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if (!empty($diff)) {
                            foreach ($diff as $value) {
                                if ($value == $row["t_name"]) {
                                    echo "<a href='feedback.php?t_id=" . $row["t_id"] . "' name='send' class='kt-button'>Give Feedback</a>";
                                }
                            }
                        } else {
                            echo "<a href='#' name='send' class='kt-button disabled'>Give Feedback</a>";
                        }
                        ?>
                    </td>
            <?php echo "</tr>";
                }
            } else {
                echo "<tr>";
                echo "<td>NA</td>";
                echo "<td>NA</td>";
                echo "<td>NA</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>