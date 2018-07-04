<?php
// Include the common file containing the database connection
require "common.php";

try {

    // Prepare the statement
    $stmt = $dbh->prepare('DELETE FROM makes WHERE id = :id');

    // Filter the id which we are GETting from the query string (passed by index.php)
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); 

    // Bind the param into our statement
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute the statment and get the record
    $stmt->execute();        

    // redirect back to index.php
    header("Location: index.php");
    exit();                   

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

// End of delete.php
