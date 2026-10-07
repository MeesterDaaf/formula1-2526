<?php

$php_errormsg = '';

require __DIR__ . '/database.php';

$id = $_GET['id'];//5

$query = "SELECT * FROM drivers WHERE driverId = $id";

$result = mysqli_query($conn, $query);

$driver = mysqli_fetch_assoc($result);

include __DIR__ . "/api.php";

$photoArray = fetchWikipediaPhoto(basename($driver['url']));//array met foto data

// if(empty($photoArray) || empty($photoArray['photo_url'])){
//     $error_message =  "Something went wrong getting a nice picture, please contact the administrator";
//     exit;
// }

$driver = array_merge($driver, $photoArray);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $driver['forename']. " " .  $driver['surname'] ?></title>
    <style>
        img{
            width: 250px;
            height: auto;
        }
    </style>
</head>
<body>
    <?php include "nav.php" ?>
    <h1>Details <?php echo $driver['forename']. " " .  $driver['surname'] ?></h1>
    <section>
        <h2>Details</h2>
        <ul>
            <li>Nummer: <?php echo $driver['number'] ?></li>
            <li>code: <?php echo $driver['code'] ?></li>
        </ul>
    </section>
    <section>
        <div>
            Geboortedatum: <?php echo $driver['dob'] ?>
        </div>
        <div>
            Nationaliteit: <?php echo $driver['nationality'] ?>
        </div>
    </section>
    <section>
        <?php if(!empty($photoArray) || !empty($photoArray['photo_url'])){ ?>
            <img src="<?php echo $driver['photo_url']; ?>" alt="afbeelding van <?php echo $driver['surname']; ?>">
        <?php } else{?>

            "Something went wrong getting a nice picture, please contact the administrator";
        <?php } ?>
    </section>
    <section>
        URL: <?php echo $driver['url'] ?>
    </section>
    <footer>

    </footer>
</body>
</html>