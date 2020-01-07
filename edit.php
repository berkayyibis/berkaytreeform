
<?php
    require_once("ayar.php");
    $isim=$_GET['isim'];
    $query = " SELECT * from treeodev where isim='".$isim."'" ;
    $result = mysqli_query($mysqli,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $isim = $row['isim'];
        $latitude = $row['latitude'];
        $longitude = $row['longitude'];
        $height = $row['height'];
        $typee = $row['typee'];
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="bootstrap.css" type="text/css"/>
    <title>Tree Location Form - Berkay Style</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update -- Tree Location Form</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?isim=<?php echo $isim ?>" method="post">
                             <table>
                              <tr>

                                <td>Isım :</td>
                                <td><input type="isim" class="form-control mb-2" placeholder=" isim girin " name="isim" value="<?php echo $isim ?>"><td>
                              <tr>
                                <td>Latitude :</td>
                                <td> <input type="latitude" class="form-control mb-2" placeholder=" latitude girin " name="latitude" value="<?php echo $latitude ?>"><td>
                              <tr>
                                <td>Longitude :</td>
                                <td> <input type="longitude" class="form-control mb-2" placeholder=" longitude girin " name="longitude" value="<?php echo $longitude ?>"><td>
                              <tr>
                                <td>Height of Tree :</td>
                                <td><input type="height" class="form-control mb-2" placeholder=" height girin " name="height" value="<?php echo $height ?>"><td>
                              <tr>
                                <td>Type of Tree :</td>
                                <td> <input type="typee" class="form-control mb-2" placeholder=" type girin " name="typee" value="<?php echo $typee ?>"><td>
                              <tr>
                                <td><button class="btn btn-primary" name="Update">Update</button>
                              <tr>
                             <table>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>