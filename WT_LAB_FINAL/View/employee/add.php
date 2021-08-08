<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job</title>
</head>
<body>
    <h3>Add Job</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="company_name" placeholder="Company Name"><br><br>
        <input type="text" name="job_title" placeholder="Contact No"><br><br>
        <input type="text" name="job_location" placeholder="Username"><br><br>
        <input type="text" name="salary" placeholder="Password"><br><br>
        <input type="submit" name="submit" value="Add Employee"><br><br>
    </form>
    <a href="home.php">Home</a>
    <?php require '../../Controller/addJob.php';?>
    <h3>All Jobs</h3>
    <table>
        <?php require '../Controller/jobsShow.php'; ?>
    </table>
</body>
</html>