<?php

    session_start();

    if(!isset($_SESSION['client']))
    {
        header('Location: signin.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Profile [<?php echo strtoupper($_SESSION['user-type']); ?>]</title>
    <link rel="stylesheet" href="../design/view-profile-client.css">
</head>
<body>
    <fieldset>
            <legend class="legend-text">Personal Info</legend>
            
            <table>
                <tr>
                    <td>
                        <img src="images/profile.png">
                    </td>
                </tr>
                <tr>
                    <td><label class="label" for="Name">Name:</label></td>
                    <td><?php echo $_SESSION['Name']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="username">Username:</label></td>
                    <td><?php echo $_SESSION['username']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="phone">Phone Number:</label></td>
                    <td><?php echo $_SESSION['phone']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="email">Email:</label></td>
                    <td><?php echo $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="DOB">Date of birth:</label></td>
                    <td><?php echo $_SESSION['DOB']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="gender">Gender</label></td>
                    <td><?php echo $_SESSION['gender']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="password">Password:</label></td>
                    <td><?php echo $_SESSION['password']; ?></td>
                </tr>
            </table>
            <a href="edit-profile-client.php"><button class="btn-submit" type="submit" name="edit-profile-agent">Edit Profile</button></a>
        </fieldset>

        <div class="btn-wrapper">
            <a href="clientdashboard.php"><button class="btn">Back</button></a> 
            <a href="../controller/signout.php"><button class="btn">Signout</button></a>
        </div>
</body>
</html>