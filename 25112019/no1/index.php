<?php
$servername = 'localhost';
$username = 'root';
$password = 'mysql';
$dbname = 'testdb';

try{ 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //prepared sql statement
    $stmt = $conn->prepare("INSERT INTO MyGuests(firstname, lastname, email)VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    //insert row
    $firstname = 'Tillmann';
    $lastname = 'Ke';
    $email = 'tillke@test.com';
    $stmt->execute();
    
    //insert another row
    // $firstname = 'Mark';
    // $lastname = 'Knopfler';
    // $email = 'knopfler@test.com';
    // $stmt->execute();
    
    //insert another row
    // $firstname = 'Rasmus';
    // $lastname = 'Seebach';
    // $email = 'seebach@test.com';
    // $stmt->execute();

    echo "New rows created successfully";

}

catch(PDOException $e){
    echo "Something went wrong: " . $e->getMessage();
}

$conn = null;

