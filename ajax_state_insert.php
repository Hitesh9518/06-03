<?php
require 'config.php';

// insert
$error = array();
if (empty($_POST['state_name'])) {

    $error[] = "State Name is Required";
} else {
    $state_name = $_POST['state_name'];

    if (!preg_match("/^[a-zA-z]*$/", $state_name)) {
        $error[] = "Only alphabets and whitespace are allowed.";
    } else {
        $state_name = $_POST['state_name'];
    }
}

echo "<center>";

$count = count($error);
if ($count > 0) {
    foreach ($error as $value) {
        echo "<span class='error'>" . $value . "</span><br>";
    }
} else {

    $state_name = $_POST['state_name'];
    $insert = "insert into state values(NULL,'$state_name');";
    $result = mysqli_query($con, $insert);

    if ($result) {

        echo "<span class='success'>Inserted Data..!</span>";
    }
}


echo "</center>";
