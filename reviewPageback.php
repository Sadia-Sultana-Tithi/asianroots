
<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'asianroots';
 
// Server is localhost with
// port number 3306
$servername='';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM review ORDER BY r_id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style> 

        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
        .box{
            border-radius: 15px;
            background-color: #FCBA7F;
            padding: 15px 5px ;
            margin-left: 40%;
            margin-right: 40%;
            margin-top: 10px;
           

        }
        a{
            text-align: center;
             text-decoration: none;
        }
    </style>
</head>
 
<body>
    <div class="cover">
    <div class="header">
        <a class="arrow"href="home.php"> <img src="images/asianroots.png"width="20%" height="65px"> </a>
    </div>
    <section>
        <h1>Reviews</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
               
                <th>Product Name</th>
                <th>Name</th>
                <th>Review</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['product'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['feedback'];?></td>
               
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
    

</body>
 
</html>