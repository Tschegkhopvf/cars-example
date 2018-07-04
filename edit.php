<?php
// Include the common file containing the database connection
require "common.php";

// Grab the POSTed id if any
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

// If it's not null that means the form has been submitted
if (!is_null($id)) {
    // Get the POSTed make
    $make = filter_input(INPUT_POST, 'make', FILTER_SANITIZE_STRING);
    
    if ($id > 0) {
        // Prepare the statement
        $stmt = $dbh->prepare('UPDATE makes SET make = :make WHERE id = :id');       
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    } else {
        $stmt = $dbh->prepare("INSERT INTO makes (make) VALUES (:make)");
    }

    // Bind the params into our statement
    $stmt->bindParam(':make', $make, PDO::PARAM_STR);

    // Execute the statment which will update the database
    $stmt->execute();        
    
    // redirect back to index.php
    header("Location: index.php");
    exit();    
}
// Filter the id which we are GETting from the query string (passed by index.php)
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); 

// Prepare the statement
$stmt = $dbh->prepare('SELECT * FROM makes WHERE id = :id');

// Execute the statment and get the record
$stmt->execute(['id' => $id]);

// Fetch the data as an object
$row = $stmt->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Cars example - edit make</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <?php
        // Include the header file
        require "header.php";
        ?>
        <div class="container" style="margin-top: 60px;">
            <h1>Edit Car Make</h1>
            <form action="edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row->id;?>">
                    <div class="form-group">
                        <label for="make">Make</label>
                    <input type="text" required class="form-control" id="make" name="make" placeholder="Make" value="<?php echo isset($row->make) ? $row->make : "";?>">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>            
    <?php
    // Include the footer file
    require "footer.php";
    ?>            
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
// End of edit.php