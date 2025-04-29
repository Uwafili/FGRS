<?php


require_once 'config.php';


function validateEmail() {
global $connect;
 $data=json_decode(file_get_contents('php://input'),true);
if ($data) {
    $email=htmlspecialchars($data['email']);
    if (empty($email)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Email is required!'
        ]);
       return false;
    }else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo  json_encode([
                'status' => 'error',
                'message' => 'Invalid email format!'
            ]);
            return false;
        }
    }

    //check if table exists
    $checkTable="SHOW TABLES LIKE 'waitlist'";
    $res=mysqli_query($connect,$checkTable);
    if (mysqli_num_rows($res) === 0) {
        //create table if it doesn't exist
        $createTable = "CREATE TABLE waitlist (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
                mysqli_query($connect,$createTable);
    }
  

    //check if email already exists in the database

    $sql="SELECT * FROM waitlist WHERE email='$email'";
    $result=mysqli_query($connect,$sql);
    if (mysqli_num_rows($result) > 0) {
        echo  json_encode([
            'status' => 'success',
            'message' => 'Email added to waitlist successfully!'
        ]);
        return true;
    }else{
$sql="INSERT INTO waitlist (email) VALUES ('$email')";
    $result=mysqli_query($connect,$sql);

    echo  json_encode([
        'status' => 'success',
        'message' => 'Email added to waitlist successfully!'
    ]);
    return true;
}
}
}

validateEmail();