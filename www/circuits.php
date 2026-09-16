<?php

require __DIR__ . '/database.php'; //www/database.php




$result = mysqli_query($conn, "SELECT * FROM circuits");

$circuits = mysqli_fetch_all($result, MYSQLI_ASSOC);


// foreach($circuits as $circuit):

//     echo '<p>';
//     echo '<h2>' . $circuit['name'] . '</h2>';
//     echo '<h3>' . $circuit['location'] . '</h3>';
//     echo '</p>';

// endforeach;
?>


<h1 style="color:red">Alle circuits</h1>

<?php foreach($circuits as $circuit): ?>
    <p>
        <h2><?php echo $circuit['name'] ?></h2>
        <h3><?php echo $circuit['location'] ?></h3>
    </p>
<?php endforeach; ?>


