<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit info</title>
</head>

<body>
    <?php require_once("nav.php");?>


    <div class="container">
        <h1>Edit info:</h1>
        <form method="post" action="dhedit.php" enctype="multipart/form-data">
            <?php
                $id = $_SERVER['QUERY_STRING'];
                //echo $id;

                $d = file_get_contents("data.json");
                $d = json_decode($d, true);
                //print_r($d[$id]);
                $n = $d[$id]['name'];
                $e = $d[$id]['email'];
                $p = $d[$id]['pos'];
                $t = $d[$id]['tel'];
                $dp = $d[$id]['dept'];
            ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="<?php echo $n;?>" placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Position:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $p;?>" name="pos" placeholder="Recepctionist, Manager, Associate">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Phone:</label>
                <div class="col-sm-10">
                    <input type="text" name="tel" class="form-control" value="<?php echo $t;?>" placeholder="123-456-7890">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="<?php echo $e;?>" class="form-control" placeholder="johndoe@gamil.com">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Department:</label>
                <div class="col-sm-10">
                    <input type="text" name="dept" value="<?php echo $dp;?>" class="form-control" placeholder="Marketing, Sales, Information Technology">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Photo:</label>
                <div class="col-sm-10">
                    <input type="file" name="ph" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                </div>
            </div>
            <input type="submit" value="Save" class="text-center">
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
