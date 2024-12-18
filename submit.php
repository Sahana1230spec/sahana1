<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);

    echo json_encode([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'dob' => $dob,
        'gender' => $gender
    ]);
} else {
    http_response_code(405);
    echo 'Method Not Allowed';
}
