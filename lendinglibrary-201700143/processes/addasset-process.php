<?php
//set array to store error
$errors = array();//this array will determine which error is happening
//FIRST NAME
$ID = trim($_POST['id']);
if (!empty($ID)){
    require ('includes/db.inc.php');

    $stmt = mysqli_query($conn, "SELECT * FROM Assets WHERE ID_number = '$ID'" ) or exit(mysqli_error($conn));
    if (mysqli_num_rows($stmt)>0){
        $errors[] = "Item already exist";}
} elseif (empty($email)){
    $errors[]= "Hello! You forgot to insert ITEM ID";
}

$item_Name = trim($_POST['item']);
if (empty($item_Name)){
    $errors[] = "You forgot to enter your item name";
}

$Category = trim($_POST['category']);
if (empty($Category)){
    $errors[] = "You forgot to enter your item Category";
}

$Manufacture = trim($_POST['manufacture']);
if (empty($Manufacture)){
    $errors[] = "You forgot to enter your item manufacture";

}

$Model = trim($_POST['model']);
if (empty($Model)){
    $errors[] = "You forgot to enter your item model";
}

$Acquired_Date = trim($_POST['acquiredDate']);
    if (empty($Acquired_Date)){
    $errors[] = "You forgot to enter your item Acquired Date";
}

$Purchased_Price = trim($_POST['c2']);
if (empty($Purchased_Price)){
    $errors[] = "You forgot to enter your item Purchased Price";
}

$Current_Value = trim($_POST['c3']);
if (empty($Current_Value)){
    $errors[] = "You forgot to enter your item Current Value";
}

$Condition = trim($_POST['condition']);
if (empty($Condition)){
    $errors[] = "You forgot to enter your item condition";
}

$Location = trim($_POST['location']);
if (empty($Location)){
    $errors[] = "You forgot to enter your item location";
}

$Owner = trim($_POST['owner']);
if (empty($Owner)){
    $errors[] = "You forgot to enter your item Owner";
}

$Retired_Date = trim($_POST['retiredDate']);
if (empty($Retired_Date)){
    $errors[] = "You forgot to enter your item retired date";
}

$Description = trim($_POST['description']);
if (empty($Description)){
    $errors[] = "You forgot to enter your item description";

}
//picture
$check = getimagesize($_FILES["picture"]["tmp_name"]);
    if($check !== false) {
        $image = $_FILES['picture']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
    }



$Comments = trim($_POST['comment']);
if (empty($Comments)){
    $errors[] = "You forgot to enter your item comments";
}

$Status = "Available" ;
if (empty($errors)){
    try{
        require('includes/db.inc.php'); //caling db.inc to connect to db
        $query = "INSERT INTO Assets ( ID_number,Owner,Item,Description,Category,Item_con,Acquired_Date,Purchase_Price,Current_Value,Location,Manufacturer,Model,Comments,Retired_Date,Status,Attachments)"; // querying sql function
        $query .= "VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
        $q = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($q,$query);
        mysqli_stmt_bind_param($q,"ssssssssssssssss",$ID,$Owner,$item_Name,$Description,$Category,$Condition,$Acquired_Date,$Purchased_Price,$Current_Value,$Location,$Manufacture,$Model,$Comments,$Retired_Date,$Status,$imgContent);
        mysqli_stmt_execute($q);
        if (mysqli_stmt_affected_rows($q) == 1) {
            echo "<script type='text/javascript'> document.location = 'thankyouasset.php'; </script>";
            exit();
        } else {
            $errorstring = "<p class ='text-center col-sm-8 mx-auto' style='color:red'>";
            $errorstring .= "System Error<br/>you could not be registred due ";
            $errorstring .= "to a system error. we apologize for any invonvenience.</p>";
            echo " <p class=' text-center col-sm-2 mx-auto' style='color:red'>$errorstring</p>";
            echo '<p>' . mysqli_error($conn) . '<br><br>Query:' . $query . '</p>';
            mysqli_close($conn);
            exit();
        }


    } catch (Exception $e) {
        print "The system is buys please try later";
    } catch (Error $e) {
        print "The system is busy";
    }


}else{
    $errorstring= "Error! <br> The following errors occurred:<br>";
    foreach ($errors as $msg){
        $errorstring .= "-$msg <br>\n";
    }
    $errorstring.="please try again.<br>";
    echo "<p class='text-center col-sm-2 mx-auto' style='color:red'>$errorstring</p>";
}
