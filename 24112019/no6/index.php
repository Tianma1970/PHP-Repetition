<?php

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "testdb";

try{
    $conn = New PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //set the PDO errormode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//1.crate db table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

//after we created the table we can insert data
//2. insert data
// $sql = "INSERT INTO MyGuests(firstname, lastname, email)
//         VALUES ('Tillmann', 'Weimer', 'tillmann@test.com')";

//after we inserted data we want to delete data
// $sql = "DELETE FROM MyGuests WHERE ID=8";

//after we deleted data we want to update a record
//3.update record

$sql = "UPDATE MyGuests SET firstname='Julia' WHERE id = 1"; 

$conn->exec($sql);
    echo "Wow it works!";
}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}



$conn = null;
