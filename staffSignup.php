<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff registeration</title>
</head>
<body>  
    <form action="" method="POST" enctype="multipart/form-data">
        <h2 style="text-align: center;">Staff Registeration Form</h2>
        <table align="center">
            <tr>
                <td>Staff Name: </td>
                <td><input type="text" name="name" placeholder="Full Name" required></td>
            </tr>

            <tr>
                <td>Phone Number: </td>
                <td><input type="text" name="phNo" placeholder="Phone Number" required></td>
            </tr>

            <tr>
                <td>Email :</td>
                <td><input type="email" name="email" placeholder="Email" required></td>
            </tr>

            <tr>
                <td>Gender: </td>
                <td><input type="radio" name="gender" value="Male" checked>Male<input type="radio" name="gender" value="Female">Female</td>
            </tr>

            <tr>
                <td>Date Of Birth: </td>
                <td><input type="date" name="dob" required></td>
            </tr>

            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" required></td>
            </tr>

            <tr>
                <td>Address: </td>
                <td><textarea name="address" required></textarea></td>
            </tr>

            <tr>
                <td>Hobby: </td>
                <td>
                <input type="checkbox" value="Reading" name="chkhobby[]" class="hobby"> Reading
                <input type="checkbox" value="Travelling" name="chkhobby[]" class="hobby"> Travelling
                <input type="checkbox" value="Sport" name="chkhobby[]" class="hobby"> Sport
                </td>
            </tr>

            <tr>
                <td>Staff Role: </td>
                <td><select name="staffRole">
                    <optgroup label="Choose Role">
<?php

$selectRole = "Select * from staffrole";
$exploitRole = mysqli_query(mysqli_connect('localhost', 'root', '', 'myshop'), $selectRole);
$allRole = mysqli_num_rows($exploitRole);

for($i = 0; $i < $allRole; $i++) {
    $roleArr = mysqli_fetch_array($exploitRole);
    $roleId = $roleArr['RoleID'];
    $role = $roleArr['Role'];
    echo "<option value='$roleId'>$role</option>";
}


?>
                        
                    </optgroup>
                </select></td>
            </tr>

            <tr>
                <td>Profile Picture: </td>
                <td><input type="file" name="profile" required></td>
            </tr>

            <tr>
                <td colspan="2"><input type="checkbox" required>I agreed Terms and Condition.</td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="btn" value="Signup"></td>
            </tr>

        </table>
    </form>

      
</body>
</html>

<?php
    
if(isset($_POST['btn'])) {
    $name = $_POST['name'];
    $phNo = $_POST['phNo'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];

    $hobby = $_POST['chkhobby'];
    $chkBoxValue = "";

    //staffrole
    $staffRole = $_POST['staffRole'];

    // profile picture variables
    $staffProfAndName = $_FILES['profile']['name'];
    $imgFolder = 'img/'; // location

    // profile picture upload
    if($staffProfAndName) {
        $location = $imgFolder."".$staffProfAndName;
        $getImg = copy($_FILES['profile']['tmp_name'], $location);
        if(!$getImg) {
            exit('Problem occured while storing profile image!');
        }

    }
    // end of uploading image

    foreach ($hobby as $el) {
        $chkBoxValue .= $el.',';
    }

    // $connect = mysqli_connect('localhost', 'root', '', 'myshop');
    
    $getEmail = "Select * from staff where Email = '$email'";
    $connectEmail = mysqli_query(mysqli_connect('localhost', 'root', '', 'myshop'), $getEmail);
    $getEmailNum = mysqli_num_rows($connectEmail);
    
    if($getEmailNum == 0) {
        $run = mysqli_query(
            mysqli_connect('localhost', 'root', '', 'myshop'),
            "Insert into staff(StaffName, PhoneNumber, Email, DOB, Address, Gender, Password, Hobby, StaffProfile, RoleID) values('$name', '$phNo', '$email', '$dob', '$address', '$gender', '$password', '$chkBoxValue' , '$location', '$staffRole')"
        );
    
        if($run) {
            echo '<script>alert("Registeration is successful!");</script>';
            echo '<script>location = "staffSignup.php";</script>';
        } else {
            echo '<script>alert("Something was wrong! Please try again.");</script>';
            echo '<script>location = "staffSignup.php";</script>';
        }
    } else {
        echo "<script>alert('Email already token! Please use another email.');</script>";
    }


}

?>