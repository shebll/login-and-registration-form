<?php 
            if(isset($_POST["submit"]))
            {
                $fullname = $_POST["fullname"];
                $username = $_POST["username"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $address = $_POST["address"];
                $password = $_POST["password"];
                $passwordRepeat = $_POST["passwordRepeat"];
                $birthdate = $_POST["birthdate"];
                
                $errors=array();
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                // print_r($_POST);
            
                if (empty($fullname) OR empty($username) OR empty($password) OR empty($passwordRepeat) OR empty($email) OR empty($phone) OR empty($adress) OR empty($birthdate)     ) {
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
            }
        ?>