
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="bootstrap.css" type="text/css"/>
    <title>Tree Location Form - Berkay Style</title>
</head>
<body class="bg-dark">
<body background="orman.jpg">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Tree Location Form --- Berkay Style</h3>
                        </div>
                        <div class="card-body">

                            <form action="insert.php" method="POST">
                             <table>
                              <tr>

                                <td>Isım :</td>
                                <td><input type="isim" class="form-control mb-2" placeholder=" isim girin " name="isim" required><td>
                              <tr>
                                <td>Latitude :</td>
                                <td> <input type="latitude" class="form-control mb-2" placeholder=" latitude girin " name="latitude" required><td>
                              <tr>
                                <td>Longitude :</td>
                                <td> <input type="longitude" class="form-control mb-2" placeholder=" longitude girin " name="longitude" required><td>
                              <tr>
                                <td>Height of Tree :</td>
                                <td><input type="height" class="form-control mb-2" placeholder=" height girin " name="height" required><td>
                              <tr>
                                <td>Type of Tree :</td>
                                <td> <input type="typee" class="form-control mb-2" placeholder=" type girin " name="typee" required><td>
                              <tr>
                                <td><button class="btn btn-primary" name="submit">Submit</button>
                              <tr>
                             <table>
                            </form>
                            <form action="bbb.php" >
                             <table>
                                <tr>
                                    <td><button class="btn btn-primary" name="Map">Map</button>
                                <tr>
                             <table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
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
    <title>View DataBase</title>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24494.50769760241!2d32.72957425!3d39.878416099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1578240872848!5m2!1str!2str" width="540" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
</body>
</html>
