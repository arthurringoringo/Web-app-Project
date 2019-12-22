<?php
//set array to store error
$errors = array();//this array will determine which error is happening
//FIRST NAME
$first_name = trim($_POST['firstname']);
if (empty($first_name)){
    $errors[] = "You forgot to enter your first name";
}
$last_name = trim($_POST['LastName']);
if (empty($last_name)){
    $errors[] = "you forgot to enter the last name";
}
$company = trim($_POST['company']);
if (empty($company)){
    $errors[] = "you forgot to enter the company name";
}
$job_title = trim($_POST['jobTitle']);
if (empty($job_title)){
    $errors[] = "you forgot to enter the job title";
}
$bis_phone = trim($_POST['bisPhone']);
if (empty($bis_phone)){
    $errors[] = "you forgot to enter the Buisness phone number";
}
$home_phone = trim($_POST['hmPhone']);
if (empty($home_phone)){
    $errors[] = "you forgot to enter the Home phone number";
}


$email = trim($_POST['email']);
if (!empty($email)) {
    require ('includes/db.inc.php');

    $stmt = mysqli_query($conn, "SELECT * FROM Contacts WHERE Email_Address = '$email'" ) or exit(mysqli_error($conn));
    if (mysqli_num_rows($stmt)>0){
        $errors[] = "Email already exits";}
} elseif (empty($email)){
    $errors[]= "Hello! You forgot to insert email address";
}
//MOBILE PHONE
$mobile_phone = trim($_POST['mblPhone']);
if (empty($mobile_phone)) {
    $errors[] = "you forgot to enter mobile Phone";
}
$fax = trim($_POST['fax']);
if (empty($fax)) {
    $errors[] = "you forgot to enter fax";
}
$street = trim($_POST['street']);
if (empty($street)) {
    $errors[] = "you forgot to enter street name";
}
$city = trim($_POST['city']);
if (empty($city)) {
    $errors[] = "you forgot to enter city name";
}
$state = trim($_POST['state']);
if (empty($state)) {
    $errors[] = "you forgot to enter state name";
}
$zip = trim($_POST['zip']);
if (empty($zip)) {
    $errors[] = "you forgot to enter zip";
}
$country = trim($_POST['country']);
if (empty($country)) {
    $errors[] = "you forgot to enter zip";
}
$web = trim($_POST['web']);
if (empty($web)) {
    $errors[] = "you forgot to enter web";
}
$notes = trim($_POST['notes']);
if (empty($notes)) {
    $errors[] = "you forgot to enter notes";
}


$file = addslashes(file_get_contents($_FILES["exampleFormControlFile1"]["tmp_name"]));



if (empty($errors)){
    try{
        require('includes/db.inc.php'); //caling db.inc to connect to db
        $query = "INSERT INTO Contacts ( First_Name,Last_Name,Company,Email_Address,Job_Title,Business_Phone,Home_Phone,Mobile_Phone,Fax_Number,Address,City,Province,Postal_Code,Country,Web_Page,Notes,Attachments)"; // querying sql function
        $query .= "VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
        $q = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($q,$query);
        mysqli_stmt_bind_param($q,"sssssssssssssssss",$first_name,$last_name,$company,$email,$job_title,$bis_phone,$home_phone,$mobile_phone,$fax,$street,$city,$state,$zip,$country,$web,$notes,$files);
        mysqli_stmt_execute($q);
        if (mysqli_stmt_affected_rows($q) == 1) {
            echo "<script type='text/javascript'> document.location = 'thankyoucontact.php'; </script>";
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







