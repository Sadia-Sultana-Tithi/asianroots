

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> add pic</title>
    <!--frontawesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style type=text/css>

         body {
            background-image: url('images/back1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #232121;
        }
        nav{
            position: fixed;

        }


        #content{
            width: 50%;
            margin-top: 0px;
            margin-left: 25%;
            border: 5px solid #8c3434;
            background-color: rgba(140, 52, 52, 0.29);
        }
        form{
            width: 50%;
            margin: 20px auto;

        }
        textarea{
            height: 65px;
            width: 200px;


        }
      

        img{
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }

        label{
            color: #78787e;
            font-family: "Bookman Old Style";
            font-size: xx-large;
            margin-top: 80px;

            margin-left: 400px;
        }

        h2{

            color: #8c3434;

        }

    </style>



</head>
<body>

<div class="header">
    <a class="arrow"href="home.php"> <img src="images/asianroots.png"width="280" height="65px"> </a>
</div>
<label > Add dermatologist </label>
<div class="container">
    <div class="row text-center-py-5">
        <?php
        error_reporting(0);
        // Create database connection
        $db = mysqli_connect("localhost", "root", "", "asianroots");

        // Initialize message variable
        $msg = "";

        // If upload button is clicked ...
        if (isset($_POST['upload'])) {
            // Get text
            $d_id = mysqli_real_escape_string($db, $_POST['ID']);
            $name = mysqli_real_escape_string($db, $_POST['name']);
            $speciality = mysqli_real_escape_string($db, $_POST['speciality']);
            $degree = mysqli_real_escape_string($db, $_POST['degree']);
            $time = mysqli_real_escape_string($db, $_POST['details']);


            $sql = "INSERT INTO dermatologist (d_id,name,speciality,degree,time ) VALUES ('$d_id','$name','$speciality','$degree','$time')";
            // execute query
            mysqli_query($db, $sql);

            $result = mysqli_query($db, "SELECT * FROM dermatologist");
        }
        ?>


        <div id="content">

            <form method="POST" action="add_dermatologist.php">
                <input type="hidden" name="size" value="1000000">

                <div>
      <textarea id="d_id"
          cols="40"
          rows="4"
          name="ID"
          placeholder="Doctor ID"></textarea>
                </div>

                <div>
      <textarea
              id="name"
              cols="40"
              rows="4"
              name="name"
              placeholder="Name"></textarea>
                </div>


                <div>
      <textarea
              id="speciality"
              cols="40"
              rows="4"
              name="speciality"
              placeholder="Speciality"></textarea>
                </div>

                <div>
      <textarea
              id=" degree"
              cols="40"
              rows="4"
              name="degree"
              placeholder="Degree"></textarea>
                </div>

                <div>
      <textarea
          id="time"
          cols="40"
          rows="4"
          name="details"
          placeholder="Details"></textarea>
                </div>



                <div>
                    <button type="submit" name="upload">ADD</button>
                </div>
            </form>
        </div>



        <!--bootstrap_js-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>
