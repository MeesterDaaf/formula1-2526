<?php

require __DIR__ . '/database.php';

$query = "SELECT * FROM constructors";

$result = mysqli_query($conn, $query);

$constructors = mysqli_fetch_all($result, MYSQLI_ASSOC);

