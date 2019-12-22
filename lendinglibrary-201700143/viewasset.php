<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lending-Library</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/menu.js"></script>
    <link href="J:\bootstrap\bootstrap-3.3.6-dist\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="J:\bootstrap\bootstrap-3.3.6-dist\css\cutom.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"</script>
    <script src="J:\bootstrap\bootstrap-3.3.6-dist\js\bootstrap.min.js"></script>


</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <?php include ("includes/sidebar.php") ?>
    </div>

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-dark" id="menu-toggle"><i class="fa fa-bars"></i>  Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>

        <div class="container-fluid  ">
            <?php

            require ('includes/db.inc.php');

            $sql = "SELECT * FROM Assets";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo '<table class ="table table-sm">    
                    <tr class="table-primary"><th scope="col">ID</th><th scope="col">Owner</th><th scope="col">Item</th><th scope="col">Description</th><th scope="col">Category</th><th scope="col"> Condition</th><th scope="col"> Acquired Date</th><th scope="col"> Purchase Price</th><th scope="col"> Current Value</th><th scope="col"> Location</th><th scope="col"> Manufacturer</th><th scope="col"> Model</th><th scope="col">Comments</th><th scope="col">Picture</th><th scope="col">Retired Date</th><th scope="col"> Status</th></tr>';
                while ($row = $result->fetch_assoc()) {
//                    echo "Company: " . $row["Company"] . " - First Name: " . $row["First_Name"] . " Last Name" . $row["Last_Name"] . " Email" . $row["Email_Address"]."<br>";

                        $encoded_img= base64_encode($row['Attachments']);
                        $attachments = "<img src='data:image/jpg;base64,{$encoded_img}'>";
                    echo'<tr><td>' . $row['ID_number'] . '</td><td>' . $row['Owner']. '</td><td>' . $row['Item'] . '</td><td>' . $row['Description'] . '</td><td>' . $row['Category'] . '</td><td>' . $row['Item_Con'] . '</td><td>' . $row['Acquired_Date'] . '</td><td>' . $row['Purchase_Price'] . '</td><td>' . $row['Current_Value'] . '</td><td>' . $row['Location'] . '</td><td>' . $row['Manufacturer'] . '</td><td>' . $row['Model'] . '</td><td>' . $row['Comments'] . '</td><td>' .$attachments. '</td><td>' . $row['Retired_Date'] . '</td><td>' . $row['Status'] . '</td></tr>';}
                echo '</table>';
            }
            else {
                echo "0 results";
            }
            $conn->close();


            ?>


        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
