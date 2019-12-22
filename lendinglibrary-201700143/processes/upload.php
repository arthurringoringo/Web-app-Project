<?php
// ERROR REPORTING
error_reporting(E_ALL & ~E_NOTICE);

// DATABASE SETTINGS
// !! CHANGE THESE TO YOUR OWN !!

DEFINE('DB_USER', 'simpleuser'); // or whatever userid you created
DEFINE('DB_PASSWORD', 'P@ssword123'); // or whatever password you created
DEFINE('DB_HOST', '10.0.6.244');
define('DB_CHARSET', 'utf8');
DEFINE('DB_NAME', 'Lending_lib');


if (exif_imagetype($_FILES['picture']['tmp_name'])===false) { die("Not an image"); }

/* [CONNECT TO DB] */
$pdo = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
    DB_USER, DB_PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false]
);

/* [INSERT IMAGE] */
// DO YOUR ERROR CHECKING HERE IF YOU WANT
try {
    $stmt = $pdo->prepare("INSERT INTO `Contacts` (`Attachments.name`, `Attachments.data`) VALUES (?, ?)");
    $stmt->execute([$_FILES["picture"]["name"], file_get_contents($_FILES['picture']['tmp_name'])]);
} catch (Exception $ex) {
    echo "ERROR - " . $ex->getMessage();
    die();
}

/* [ON COMPLETE] */
// DO SOMETHING, MAYBE REDIRECT THE USER TO ANOTHER PAGE
// header("Location: http://example.com/abc.php");
echo "OK";
