<?php 
function validate($fullname,$username,$email,$phone,$address,$password,$passwordRepeat,$birthdate,$image_name){
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
                            // echo "<div class='alert alert-danger'>$error</div>";
                            echo "<script>alert('$error')</script>";
                        }
                    }
                    else{
                        $servername = "localhost"; // change this to your server name if it's different
                        $usernamee = "WebAssignment"; // change this to your MySQL username
                        $passwordd = "12345678orca"; // change this to your MySQL password
                       $dbname = "assignment1"; // change this to your MySQL database name
                        // $dbname = "webassignment"; // change this to your MySQL database name

                        // Create a connection
                        $conn = new mysqli($servername, $usernamee, $passwordd, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $flagg=true;
                        $sqll = "SELECT username FROM users";
                        $resultt = $conn->query($sqll);
                        if ($resultt->num_rows > 0) {
                            while($roww = $resultt->fetch_assoc()) {
                                
                                if($roww["username"]==$username )
                                {
                                    $flagg = false;
                                    // echo "<div class='alert alert-danger'>username already exists</div>";
                                    echo "<script>alert('username already exists')</script>";
                                    break;
                                }
                            }
                        }

                            $query = "INSERT INTO users 
                            (full_name, 
                            username, 
                            email, 
                            password, 
                            address, 
                            birthdate, 
                            phone,
                            image) 
                            VALUES 
                            ('$fullname',
                            '$username',
                            '$email',
                            '$password',
                            '$address',
                            '$birthdate',
                            '$phone',
                            '$image_name');";
                        //    $result = mysqli_query($conn, $query); 
                        
                        if($flagg==true){
                            if ($conn->query($query) === TRUE) {
                                echo "You have registered successfully!";
                                // echo $birthdate;
                                echo "<script>alert('You have registered successfully!')</script>";
                            } 
                            else {
                                // echo "Error: " . $query . "<br>" . $conn->error;
                                echo "<script>alert('error')</script>";
                            }
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
    require_once "Upload.php";
    $image_name = $_FILES['image']['name'];
    validate($fullname,$username,$email,$phone,$address,$password,$passwordRepeat,$birthdate,$image_name);
}

if (isset($_POST["loginSubmit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];    
    $servername = "localhost"; // change this to your server name if it's different
    $usernamee = "WebAssignment"; // change this to your MySQL username
    $passwordd = "12345678orca"; // change this to your MySQL password
    $dbname = "assignment1"; // change this to your MySQL database name
    // $dbname = "webassignmnet"; // change this to your MySQL database name


    // Create a connection
    $conn = new mysqli($servername, $usernamee, $passwordd, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT email, password FROM users";
    $result = $conn->query($sql);
    
    $flag = false;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        
        if($row["email"]==$email )
        {
            $flag =true;
            if($row["password"]==$password){
                // echo "log in successfully";
                echo "<script>alert('log in successfully')</script>";
                break;
            }
            else{
                // echo "login failed wrong password";
                echo "<script>alert('login failed wrong password')</script>";
            }
        }
      }
      if(!$flag){
        // echo "user is not registered";
        echo "<script>alert('user is not registered')</script>";
      }
    }
    $conn->close();
}

///////////////////////////////////////////
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if(isset($_POST["userName"])) {   
    // echo json_encode($arr);
    // echo json_encode(GetNames(9,23));
    $userName = $_POST['userName'];

    // error_log($month);
    error_log($userName);
    if(GetNames($userName)){
        echo json_encode("t");
        
    }else{
        echo json_encode("f");
    }

    // echo GetBio(GetNames(9,23));
}
function GetNames($userName){

    $servername = "localhost"; // change this to your server name if it's different
    $usernamee = "WebAssignment"; // change this to your MySQL username
    $passwordd = "12345678orca"; // change this to your MySQL password
    $dbname = "assignment1"; // change this to your MySQL database name
    // $dbname = "webassignment"; // change this to your MySQL database name

    // Create a connection
    $conn = new mysqli($servername, $usernamee, $passwordd, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sqll = "SELECT username FROM users";
    $resultt = $conn->query($sqll);
    if ($resultt->num_rows > 0) {
        while($roww = $resultt->fetch_assoc()) {
            
            if($roww["username"] == $userName )
            {
                return false;
            }
        }
        return true;
    }
  
    $conn->close();
}
?>