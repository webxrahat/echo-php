<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .inpu {
        display: block;
        width: 300px;
        height: 30px;
        margin-top: 20px;
    }

    .btn {
        padding: 10px 18px;
        background-color: blue;
        color: white;
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <div>
        <form action="printForm.php" method="post">


            <input class="inpu" type="text" name="name" placeholder="user name">
            <input class="inpu" type="text" name="age" placeholder="age">
            <input class="btn" type="submit" name="save" value="submit">


        </form>
    </div>
</body>

</html>