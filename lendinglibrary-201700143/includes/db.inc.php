<?php
DEFINE('DB_USER', 'simpleuser'); // or whatever userid you created
DEFINE('DB_PASSWORD', 'P@ssword123'); // or whatever password you created
DEFINE('DB_HOST', '10.0.6.244');
DEFINE('DB_NAME', 'Lending_lib');

try {
// Make the connection:
    $conn = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
// Set the encoding...optional but recommended
    mysqli_set_charset($conn, 'utf8');

 // echo "success";
}
catch (Exception $e) {
//print "An exception occurred. Message: " . $e->getMessage();
    print "The system is busy. Please try later";
}
catch (Error $e) {
//print "An error occurred. Message: " . $e->getMessage();
    print "The system has error. Please try later" .$e -> getMessage();
}
?>