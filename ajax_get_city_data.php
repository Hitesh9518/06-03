<?php
require('config.php');

$sql = "select * from city where state_id =" .$_POST['state_id']."";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value=" . $row['city_id'] . ">" . $row['city_name'] . "</option>";
    }
} else {
    echo "<option value=''>City not available</option>";
}
?>