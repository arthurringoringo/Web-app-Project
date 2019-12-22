<?php


$errors = array();


$ID = trim($_POST['id']);
if (empty($ID)){
    $errors[] = "You forgot to enter your item ID";
}
//if (!empty($ID)) {
//    require ('includes/db.inc.php');
//
//    $stmt = mysqli_query($conn, "SELECT * FROM Assets WHERE ID_number = '$ID' and Status ='Unavailable'" ) or exit(mysqli_error($conn));
//    if (mysqli_num_rows($stmt)>0){
//        $errors[] = "ITEM IS UNAVAILABLE";}
//}

$InCondition = trim($_POST['condition']);
if (empty($InCondition)){
    $errors[] = "You forgot to enter your item condition";
}

$Notes = trim($_POST['notes']);
if(empty($Notes)){
    $errors[] = "You forgot to enter check in Notes";
}



if (empty($errors)){
    try{
        require('includes/db.inc.php'); //caling db.inc to connect to db
        $query = " UPDATE Transactions SET Checked_In_Condition = '$InCondition',Notes='$Notes',Checked_In_Date = NOW()  WHERE Asset = '$ID' And Checked_In_Date is null"; // querying sql function
        $q = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($q,$query);
        mysqli_stmt_execute($q);
        if (mysqli_stmt_affected_rows($q) == 1) {
            echo "<script type='text/javascript'> document.location = 'itemcheckin.php'; </script>";
            $stmt1 = $conn->prepare("update Assets set Status='Available' where ID_number = '$ID'");
            $stmt1->execute();
            $stmt1->close();
            exit();
        } else {
            $errorstring = "<p class ='text-center col-sm-8 mx-auto' style='color:red'>";
            $errorstring .= "System Error<br/>you could not be registred due ";
            $errorstring .= "to a system error. we apologize for any invonvenience.</p>";
            echo " <p class=' text-center col-sm-2 mx-auto' style='color:red'>$errorstring</p>";
            echo '<p>' . mysqli_error($conn) . '<br><br>Query:' . $query . '</p>';
            mysqli_close($conn);
            echo '<footer class="jumbotron text center col-sm-12 mx-auto" style="...">';
            include("footer.php");
            echo '</footer>';
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
