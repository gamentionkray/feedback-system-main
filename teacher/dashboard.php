<?php
include('includes/dashboard-functions.php');

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
    <link rel="stylesheet" href="../assets/css/style-dashboard.css">
    <script src="../assets/js/app.js"></script>
    <title><?= $login_session_name; ?> Dashboard</title>
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
        <div class="kt-dashboard-sub-title mt-40">You have received total <span class="kt-dashboard-title error-red"><?= $row['t_count'] ?> </span>feedback/s!</div>
        <div class="kt-dashboard-sub-title mt-20">Highly Satisfied: <span class="error-red"><?= $hs ?></span></div>
        <div class="kt-dashboard-sub-title mt-20">Satisfied: <span class="error-red"><?= $s ?></span></div>
        <div class="kt-dashboard-sub-title mt-20">Neutral: <span class="error-red"><?= $n ?></span></div>
        <div class="kt-dashboard-sub-title mt-20">Dissatisfied: <span class="error-red"><?= $d ?></span></div>
        <div class="kt-dashboard-sub-title mt-20">Highly Dissatisfied: <span class="error-red"><?= $hd ?></span></div>
    </div>
</body>

</html>