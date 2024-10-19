<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php

    $conn= mysqli_connect("localhost", "root", "", "crud") or die("connection faild");

    $sql = "SELECT * FROM people JOIN studentlass WHERE people.sclass = studentlass.cid";


    $result= mysqli_query($conn, $sql) or die("Unsuccessful");

    if(mysqli_num_rows($result) > 0){

   

    ?>


    <div class="col-10 mx-auto bg-primary p-2">
        <h1 class="fs-3">All USERS</h1>
        <form action="">
            <input type="text">
            <button type="submit" class="btn-warning">Add User</button>
        </form>
    </div>

    <div class="col-10 mx-auto">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($row= mysqli_fetch_assoc($result)) {
               
                ?>
                <tr>
                    <th scope="row"><?php echo $row['sid'];?></th>
                    <td><?php echo $row['sid'];?></td>
                    <td><?php echo $row['sname'];?></td>
                    <td><?php echo $row['saddress'];?></td>
                    <td><?php echo $row['sclass'];?></td>
                    <td><?php echo $row['sphone'];?></td>
                </tr>

                <?php  } ?>

            </tbody>
        </table>
    </div>
    <?php  } ?>

</body>

</html>