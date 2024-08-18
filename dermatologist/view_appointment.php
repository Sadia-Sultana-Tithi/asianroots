<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "asianroots";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>

        <table class="appointment">
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Contact</td>
                    <td>Action</td>
                </tr>
            </thead>
                <?php
        
               
                
                $sql = "SELECT * FROM appointment ";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                  
            
                ?>
                <tr>
                    <td><?php echo $row['first_name'];?></td>
                    <td><?php echo $row['last_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['contact'];?></td>
                    <td>
                        <a href="delete_appointment.php?id=<?php echo $row['id'];?>" class='del-btn'>Delete</a></td>
                </tr>
                <?php
                      } //while condition closing bracket
                    }  //if condition closing bracket
                ?>
        </table>
        <?php 
    if(isset($_GET['m'])){ ?>
    <div class="flash-data" data-flashdata="<?php echo $_GET['m'];?>"></div>
    <?php } ?>
    
    <script>
        $('.del-btn').on('click',function(e){
            e.preventDefault();
            const href = $(this).attr('href') 
            Swal.fire({
                title: 'Are you sure to delete?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        document.location.href = href;
                        
                    }
                })
         })

         const flashdata = $('.flash-data').data('flashdata')
         if(flashdata){
             swal.fire({
                 type : 'success',
                 title : 'Record Deleted',
                 text : 'Record has been deleted'
             })
         }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        .appointment{
            width: 100%;
               text-align: center;
        }
        .appointment th, td{
            border-bottom: 2px solid seagreen;
               padding:1rem;
               font-size: 20px;
              border-bottom: 2px solid seagreen;
          }
        body{
            background: white;
        }
        .del-btn{
            text-decoration: none;
            color: black;
            


        }
    </style>
</body>
</html>