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

            $sql = "SELECT * FROM Contacts";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo '<table class ="table table-responsive table-sm">    
                    <tr class="table-primary"><th scope="col">ID</th><th scope="col">Company</th><th scope="col"> Last Name</th><th scope="col"> First Name</th><th scope="col"> Email</th><th scope="col"> Job Title</th><th scope="col"> Business Phone</th><th scope="col"> Home Phone</th><th scope="col"> Mobile Phone</th><th scope="col"> Fax Number</th><th scope="col"> Address</th><th scope="col"> City</th><th scope="col"> Province</th><th scope="col"> Zip code</th><th scope="col"> Country</th><th scope="col"> Web Page</th> <th scope="col"> Notes</th><th scope="col"> Picture</th></tr>';
                while ($row = $result->fetch_assoc()) {
//                    echo "Company: " . $row["Company"] . " - First Name: " . $row["First_Name"] . " Last Name" . $row["Last_Name"] . " Email" . $row["Email_Address"]."<br>";

                        echo'<tr><td>' . $row['ID'] . '</td><td>' . $row['Company']. '</td><td>' . $row['Last_Name'] . '</td><td>' . $row['First_Name'] . '</td><td>' . $row['Email_Address'] . '</td><td>' . $row['Job_Title'] . '</td><td>' . $row['Business_Phone'] . '</td><td>' . $row['Home_Phone'] . '</td><td>' . $row['Mobile_Phone'] . '</td><td>' . $row['Fax_Number'] . '</td><td>' . $row['Address'] . '</td><td>' . $row['City'] . '</td><td>' . $row['Province'] . '</td><td>' . $row['Postal_Code'] . '</td><td>' . $row['Country'] . '</td><td>' . $row['Web_Page'] . '</td><td>' . $row['Notes'] . '</td><td>' . $row['Attachments'] . '</td></tr>';}
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
