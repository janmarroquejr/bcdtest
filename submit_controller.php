<?php

    $firstName = $lastName = $userAddress = $email = $shirtSize = $birthday = $contact = $gender = $registered_at = $x = $y = "";
    $firstName_error = $lastName_error = $userAddress_error = $email_error = $shirtSize_error = $birthday_error = $gender_error = $contact_error = "";

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "bcdtest";

    $connection = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if($connection->connect_error) {
        die("Connection failed: ". $connection->connect_error);
    }

    $error_count = 0;

    

    // $firstName = $_POST['first_name'];
    // $lastName = $_POST['last_name'];
    // $userAddress = $_POST['address'].", ".$_POST['address_2'];
    // $email = $_POST['email'];
    // $shirtSize = $_POST['shirt_size'];
    // $birthday = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['birthday'])));
    // $contact = $_POST['contact'];
    // $gender = $_POST['gender'];
    // $registered_at = date("Y-m-d");

     function test_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST['first_name']) || $_POST['first_name'] == "") {
            $firstName_error = "First name is required";
            $error_count++;
        } else {
            $firstName = test_input($_POST['first_name']);
            if(!preg_match("/^[a-zA-Z ]*$/", $firstName)){
                $name_error = "Only letters and white space allowed";
                $error_count++;
            }
            if(strlen($firstName) < 2) {
                $name_error = "First name should be more than 2 characters";
                $error_count++;
            }
        }

        if(empty($_POST['last_name']) || $_POST['last_name'] == '') {
            $lastName_error = "Last name is required";
            $error_count++;
        } else {
            $lastName = test_input($_POST['last_name']);
            if(!preg_match("/^[a-zA-Z ]*$/", $lastName)){
                $name_error = "Only letters and white space allowed";
                $error_count++;
            }
            if(strlen($lastName) < 2) {
                $name_error = "Last name should be more than 2 characters";
                $error_count++;
            }
        }

        if(empty($_POST['email']) || $_POST['email'] == '') {
            $email_error = "Email is required";
            $error_count++;
        } else {
            $email = test_input($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_error = "Invalid email format";
                $error_count++;
            }
        }

        if(empty($_POST['address']) || $_POST['address'] == '') {
            $userAddress_error = "Address is required";
            $error_count++;
        } else {
            $x = $_POST['address'];
            $y = $_POST['address_2'];
            $userAddress = $x.", ".$y;
        }

        if(empty($_POST['birthday'] || $_POST['birthday'] == '0000-0-0')) {
            $birthday_error = "Birthday is required";
            $error_count++;
        } else {
            $birthday = $_POST['birthday'];
        }

        if(!is_numeric($_POST['contact'])) {
            $contact_error = "Enter a valid phone number";
        } else {
            $contact = $_POST['contact'];
        }

        if(empty($_POST['gender']) || $_POST['gender'] == '') {
            $gender_error = "Please specify your gender";
            $error_count++;
        } else {
            $gender = $_POST['gender'];
        }

        if(empty($_POST['shirt_size']) || $_POST['shirt_size'] == '') {
            $shirtSize_error = "Please select shirt size";
            $error_count++;
        } else {
            $shirtSize = $_POST['shirt_size'];
        }

        if($error_count > 0) {
            return;
        } else {
            $registered_at = date("Y-m-d");
            
            $INSERT = "INSERT INTO registrants 
            (firstName, 
            lastName, 
            email, 
            gender, 
            userAddress, 
            birthday, 
            contact, 
            shirtSize, 
            registeredAt) VALUES 
            ('$firstName', 
            '$lastName', 
            '$email', 
            '$gender', 
            '$userAddress', 
            '$birthday', 
            '$contact', 
            '$shirtSize', 
            '$registered_at')";

            mysqli_query($connection, $INSERT);
            header("location: ./congrats.php");
        }

   
}

?>