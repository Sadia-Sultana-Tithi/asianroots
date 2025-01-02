<?php
session_start();
include "db_connection.php";

global $conn,$a,$b;

if(isset($_POST['action'])) {

    $sql = "select * from products where type !=''";
    if (isset($_POST['skintype'])) {
        $skintype = implode("','", $_POST['skintype']);
        $sql .= "AND type IN('" . $skintype . "')";
    }

    if (isset($_POST['producttype'])) {
        $producttype = implode("','", $_POST['producttype']);
        $sql .= "AND product_type IN('" . $producttype . "')";
    }


    if (isset($_POST['allergy'])) {
        $allergy = implode("','", $_POST['allergy']);
        $sql .= "AND ingri  NOT LIKE('%" . $allergy . "%')";
    }



    $result = $conn->query($sql);
    $output = '';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $output .= '
                        <div class="col-md-3 mb-2" style="margin-left: 30px;">
                        <div class="card">
                            <img class="card-img-top" src="' . $row['image'] . '">
                            <div class="card-body">
                               <h4 class="card-title"> ' . $row['product_name'] . ' </h4>
                               <h6 class="card-title"> ' . $row['product_type'] . ' </h6>
                                <form  method="post" >
                                    <input type="submit" name="submit"  value="View details" style="background: #7faba8" class="btn btn-primary">
                                    <input type="hidden" name="product_name" value=' . $row['product_name'] . ';>
                                    <input type="hidden" name="p_id" value=' . $row['p_id'] . '; >


                                </form>

                            </div>
                        </div>
                    </div>
                    
                    ';
        }
    } else {
        $output = "<h3> no data found</h3>";
    }
    echo $output;


            if(isset($_POST['submit'])) {
            $a=($_POST['p_id']);
            $b=($_POST['product_name']);
            $_SESSION['p_id']= $a;
            $_SESSION['p_name']=$b;
            ?>
                <script>
                    window.location.href=" ViewDetails.php";
                </script>
            <?php
            }
}
            ?>





