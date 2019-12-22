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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="includes/verify.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


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
        <!--General div for main page-->
        <div class="container-fluid mt-4 justify-content-center ">
            <div>
                <h3 class="text-center">Add new contacts.</h3>
            </div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                require('processes/addcontact-process.php');
                }
            ?>

            <form action="addcontact.php" id="regform" method="POST" name="regform"  enctype="multipart/form-data" onsubmit="return checked();">

                <div class="form-group row">
                    <label for="firstname"  class="col-sm-1 col-form-label">First Name:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="firstname"  name="firstname" required placeholder="First Name" value="<?php if (isset($_POST['firstname']))  echo $_POST['firstname']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="LastName"  class="col-sm-1 col-form-label">Last Name:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="LastName" name="LastName" required placeholder="Last Name" value="<?php if (isset($_POST['LastName'])) echo $_POST['LastName'];  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="company"  class="col-sm-1 col-form-label">Company:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" name="company" id="company" required placeholder="Company" value="<?php if (isset($_POST['company'])) echo $_POST['company'];  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jobTitle"  class="col-sm-1 col-form-label">Job Title:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" name="jobTitle" id="jobTitle" required placeholder="Job Title" value="<?php if (isset($_POST['jobTitle'])) echo $_POST['jobTitle'];  ?>" >
                    </div>
                </div>

                <div>
                    <h4 class="text-center">Phone Numbers.</h4>
                </div>

                <div class="form-group row">
                    <label for="bisPhone"  class="col-sm-1 col-form-label">Business Phone:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="bisPhone" name="bisPhone" required placeholder="BusinessPhone" value="<?php if (isset($_POST['bisPhone'])) echo $_POST['bisPhone'];  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hmPhone"  class="col-sm-1 col-form-label">Home Phone:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="hmPhone" name="hmPhone" required placeholder="Home Phone" value="<?php if (isset($_POST['hmPhone'])) echo $_POST['hmPhone'];  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="mblPhone"  class="col-sm-1 col-form-label">Mobile Phone:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="mblPhone" name="mblPhone" required placeholder="Mobile Phone" value="<?php if (isset($_POST['mblPhone'])) echo $_POST['mblPhone'];  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fax"  class="col-sm-1 col-form-label">Fax Number:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="fax" name="fax"  required placeholder="Fax Number" value="<?php if (isset($_POST['fax'])) echo $_POST['fax'];  ?>">
                    </div>
                </div>

                <div>
                    <h4 class="text-center">Address</h4>
                </div>

                <div class="form-group row">
                    <label for="street"  class="col-sm-1 col-form-label">Street:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" name="street" id="street" required placeholder="Street" value="<?php if (isset($_POST['street'])) echo $_POST['street'];  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city"  class="col-sm-1 col-form-label">City:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control"  name="city" id="city" required placeholder="City" value="<?php if (isset($_POST['city'])) echo $_POST['city'];  ?>" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="state"  class="col-sm-1 col-form-label">State/Province:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="state" name="state" required placeholder="State/Province" value="<?php if (isset($_POST['state'])) echo $_POST['state'];  ?>" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="zip"  class="col-sm-1 col-form-label">Zip/Postal Code:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="zip" name="zip" required placeholder="zip/Postal Code" value="<?php if (isset($_POST['zip'])) echo $_POST['zip'];  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="country"  class="col-sm-1 col-form-label">Country/Region:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="country" name="country" required placeholder="Country/Region" value="<?php if (isset($_POST['country'])) echo $_POST['country'];  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="picture" class="col-sm-1 col-form-label">Picture:</label>
                    <div class="col-5 sm-5">
                        <input type="file" class="form-control-file" name="picture" id="picture" accept=".png,.gif,.jpg,.webp"   value="<?php if (isset($_POST['picture'])) echo $_POST['picture'];  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email"  class="col-sm-1 col-form-label">Email:</label>
                    <div class="col-5 sm-5 ">
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];  ?>" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="web"  class="col-sm-1 col-form-label">Web:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" name="web" id="web" required placeholder="Web" value="<?php if (isset($_POST['web'])) echo $_POST['web'];  ?>">
                    </div>
                </div>

                
                <div class="form-group row">
                    <label for="notes" class="col-sm-1 col-form-label">Notes:</label>
                    <div class="col-5 sm-5">
                        <textarea class="form-control" name="notes" id="notes" required rows="3" value="<?php if (isset($_POST['notes'])) echo $_POST['notes'];  ?>"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-auto my-1">
                        <button id="submit" type="submit" name="submit" value="submit" class="btn btn-primary">Add new</button>
                    </div>
                </div>

            </form>



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
