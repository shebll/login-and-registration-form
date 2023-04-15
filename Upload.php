<?php
// Check if image file was uploaded
if (isset($_POST["submit"])) {
    // Get image information
    $image_name = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_error = $_FILES['image']['error'];
    $birthdate = $_POST["birthdate"];
    // Check for errors in the uploaded file
    if ($image_error === UPLOAD_ERR_OK) {
        // Define the directory to save the image in
        $upload_dir = __DIR__ . '/userImages/';

        // Create the directory if it doesn't exist
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        // Define the path to save the image to
        $upload_path = $upload_dir . $image_name;

        // Move the uploaded file to the new location
        if (move_uploaded_file($image_temp, $upload_path)) {
            echo ("Image uploaded successfully.");
          } else {
            echo ("Error uploading image.");
          }
        } else {
          echo ("Error uploading image.");
    }
}
?>  