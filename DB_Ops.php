<?php 

function validate($fullname,$username,$email,$phone,$address,$password,$passwordRepeat,$birthdate){
    $errors=array();
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                // print_r($_POST);
            
                if (empty($fullname) OR empty($username) OR empty($password) OR empty($passwordRepeat) OR empty($email) OR empty($phone) OR empty($address) OR empty($birthdate)     ) {
                    array_push($errors,"All fields are required");
                   }
                   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Email is not valid");
                   }
                   if (strlen($password)<8) {
                    array_push($errors,"Password must be at least 8 charactes long");
                   }
                   if ($password!==$passwordRepeat) {
                    array_push($errors,"Password does not match");
                   }

                    if(count($errors)>0){
                        foreach ($errors as  $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    }
                    else{
                        $servername = "localhost"; // change this to your server name if it's different
                        $usernamee = "WebAssignment"; // change this to your MySQL username
                        $password = "12345678orca"; // change this to your MySQL password
                        $dbname = "assignment1"; // change this to your MySQL database name

                        // Create a connection
                        $conn = new mysqli($servername, $usernamee, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                            $query = "INSERT INTO users 
                            (full_name, 
                            username, 
                            email, 
                            password, 
                            address, 
                            birthdate, 
                            phone) 
                            VALUES 
                            ('$fullname',
                            '$username',
                            '$email',
                            '$password',
                            '$address',
                            '$birthdate',
                            '$phone');";
                        //    $result = mysqli_query($conn, $query); 
                        
                        if ($conn->query($query) === TRUE) {
                            echo "New record created successfully";
                        } 
                        else {
                            echo "Error: " . $query . "<br>" . $conn->error;
                        }
                        $conn->close();
                    }
}
if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];
    $birthdate = $_POST["birthdate"];
    validate($fullname,$username,$email,$phone,$address,$password,$passwordRepeat,$birthdate);
}
?>