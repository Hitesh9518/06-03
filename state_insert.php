<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error {
            color: #FF0000;
        }
        .success {
            color: green;
        }
    </style>
</head>

<body>
    <center>
        <br><br>
        <h2>Add State Data </h2>
        <br>
        <p id="msg"></p>
        <form method="POST" id="state_form" autocomplete="off">
            State Name : <input type="text" name="state_name" id="state_name">
            <button type="submit" name="submit" id="submit">submit</button>
        </form>
    </center>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" src="ajax-script.js"></script>

</body>

</html>