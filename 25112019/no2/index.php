<?php

//retrieve data from MyGuests database
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>id</th><th>firstname</th><th>lastname</th></tr>";

Class TableRows extends RecursiveIteratorIterator{

    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black'>" . parent::current() . "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = 'localhost';
$dbname = 'testdb';
$username = 'root';
$password = 'mysql';

try{
    $conn = New PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //prepare statement
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();

    //set the resulting Array to asscociative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }

}
catch(PDOException $e) {
    echo "Something went wrong :" . $e->getMessage();
}
$conn = null;


echo"</table>";

