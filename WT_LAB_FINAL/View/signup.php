<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    <h3>Add Employee</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="employer_name" placeholder="Employer Name"><br><br>
        <input type="text" name="company_name" placeholder="Company Name"><br><br>
        <input type="text" name="contact" placeholder="Contact No"><br><br>
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" name="submit" value="Add Employee"><br><br>
    </form>
    <a href="index.php">Home</a>
    <?php require '../Controller/signup.php';?>
</body>
</html>