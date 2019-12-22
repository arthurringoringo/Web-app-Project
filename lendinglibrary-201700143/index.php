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
            <div class="row pt-2">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Assets </h5>
                            <p class="card-text">Add and view new asset or information about it.</p>
                            <a href="assetopt.php" class="btn btn-primary">Add Asset details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Assets list</h5>
                            <p class="card-text">View lists of assets.</p>
                            <a href="viewasset.php" class="btn btn-primary">View asset</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contacts</h5>
                            <p class="card-text">Add and view contacts information.</p>
                            <a href="contactopt.php" class="btn btn-primary">Add Contact details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contact list</h5>
                            <p class="card-text">View all contacts.</p>
                            <a href="viewcontact.php" class="btn btn-primary">View contacts</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Check In</h5>
                            <p class="card-text">Checks In an Asset.</p>
                            <a href="checkin.php" class="btn btn-primary">Check In</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Check Out</h5>
                            <p class="card-text">Check Out An Asset.</p>
                            <a href="checkout.php" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
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
