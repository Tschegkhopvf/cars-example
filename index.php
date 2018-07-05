<?php
// Include the common file containing the database connection
require "common.php";
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
    <title>Cars example - list makes</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script>

          function fnConfirmDelete(whichMake)
          {
              return confirm("Please confirm you wish to delete this make: " + whichMake + "?")
          }

      </script>
  </head>
  <body>
        <?php
        // Include the header file
        require "header.php";
        ?>
        <div class="container" style="margin-top: 60px;">
            <h1>Car Makes</h1>
        <?php

        try {                                
            echo "<table class='table'>";
            echo "<tr>";
            echo "<th>Make</th>";
            echo "<td colspan='2'><a href='edit.php?id=0' class='btn btn-default'>Add</a></td>";
            echo "</tr>";                
            foreach ($dbh->query('SELECT * FROM makes ORDER BY make ASC') as $row) {
                echo "<tr>";
                echo "<td>". $row['make'] ."</td>";
                echo "<td><a href='edit.php?id=". $row['id'] ."' class='btn btn-default'>Edit</a></td>";
                echo "<td><a onclick='return fnConfirmDelete(\"". $row['make'] ."\");' href='delete.php?id=". $row['id'] ."' class='btn btn-default'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        ?>
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
// End of index.php