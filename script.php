<?php

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "survey";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("No surveys available " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO survey_responses (full_name, age, email, dob, contact_number, favorite_food, q1, q2, q3, q4, q5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sisssssssss", $full_name, $age, $email, $dob, $contact_number, $favorite_food, $q1, $q2, $q3, $q4, $q5);


$full_name = $_POST["full_name"];
$age = $_POST["age"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$contact_number = $_POST["contact_number"];
$favorite_food = implode(", ", $_POST["favoriteFood"]); 
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];



if ($stmt->execute()) {
    echo "Form data saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();

