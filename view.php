
<?php
    require_once("ayar.php");
    $query = " SELECT * from treeodev ";
    $result = mysqli_query($mysqli,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="bootstrap.css" type="text/css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3"> DataBase </h3>
                        <table class="table table-bordered">
                            <tr>
                                <td> isim </td>
                                <td> latitude </td>
                                <td> longitude </td>
                                <td> height </td>
                                <td> type </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>
                            <?php
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $isim = $row['isim'];
                                        $latitude = $row['latitude'];
                                        $longitude = $row['longitude'];
                                        $height = $row['height'];
                                        $typee = $row['typee'];
                            ?>
                                    <tr>
                                        <td><?php echo $isim ?></td>
                                        <td><?php echo $latitude ?></td>
                                        <td><?php echo $longitude ?></td>
                                        <td><?php echo $height ?></td>
                                        <td><?php echo $typee ?></td>
                                        <td><a href="edit.php?isim=<?php echo $isim ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $isim?>">Delete</a></td>
                                    </tr>
                            <?php
                                    }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>