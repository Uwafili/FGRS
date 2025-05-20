<?php
require_once __DIR__ . '/vendor/autoload.php'; // Composer autoload
require_once 'config.php';

use libphonenumber\PhoneNumberUtil;
use libphonenumber\NumberParseException;

function validateEmail() {
    global $connect;

    $err = ['email' => '', 'phone' => ''];
    $cherr = 0;
    $data = json_decode(file_get_contents('php://input'), true);

    if ($data) {
        $email = htmlspecialchars($data['email']);
        $phone = $data['phone'];

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err['email'] = 'Invalid email format!';
            $cherr = 1;
        }

        // Validate phone using libphonenumber
        $phoneUtil = PhoneNumberUtil::getInstance();
        try {
            $numberProto = $phoneUtil->parse($phone, "NG");
            if (!$phoneUtil->isValidNumber($numberProto)) {
                $err['phone'] = 'Invalid phone number.';
                $cherr = 1;
            }
        } catch (NumberParseException $e) {
            $err['phone'] = 'Invalid phone format.';
            $cherr = 1;
        }

        // If no errors, proceed with database
        if ($cherr === 0) {
            // Check if table exists
            $checkTable = "SHOW TABLES LIKE 'waitlist'";
            $res = mysqli_query($connect, $checkTable);
            if (mysqli_num_rows($res) === 0) {
                $createTable = "CREATE TABLE waitlist (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    email VARCHAR(255) NOT NULL,
                    phone VARCHAR(20) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )";
                mysqli_query($connect, $createTable);
            }

            // Check if email already exists
            $emailSafe = mysqli_real_escape_string($connect, $email);
            $sql = "SELECT * FROM waitlist WHERE email='$emailSafe'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Email already in waitlist.'
                ]);
                return;
            }

            // Insert new record
            $phoneSafe = mysqli_real_escape_string($connect, $phone);
            $sql = "INSERT INTO waitlist (email, phone) VALUES ('$emailSafe', '$phoneSafe')";
            $result = mysqli_query($connect, $sql);

            echo json_encode([
                'status' => 'success',
                'message' => 'You have been added to the waitlist successfully!'
            ]);
            return;
        } else {
            echo json_encode([
                'status' => 'error',
                'error' => $err
            ]);
            return;
        }
    }
}

validateEmail();
