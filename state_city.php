<?php
require('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form>
            <select id="state">
                <option value="">Select State</option>
                <?php
                $sql = "select * from state ";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=" . $row['state_id'] . ">" . $row['state_name'] . "</option>";
                    }
                } else {
                    echo "<option value=''>State not available</option>";
                }
                ?>
            </select>
            <select id="city" name="city_name">
                <option value="">Select City</option>
            </select>
        </form>
    </center>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="ajax-script.js"></script>
</body>

</html>