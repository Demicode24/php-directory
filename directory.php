<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Who's this?</title>
</head>

<body>
    <?php require_once("nav.php");?>

    <!--
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <ul>
                <li>Name: John Doe</li>
                <li>Position: Manager</li>
                <li>Phone:123-456-7890</li>
                <li>Email: johndoe1</li>
                <li>Department: marketing</li>
            </ul>
            <a href="#" class="btn btn-primary">Edit</a>
        </div>
    </div>
-->
    <div class="container">
        <div class="btn-group d-flex justify-content-center" role="group">
            <button style="background-color: #FFEAD0; color: gray;" type="button" class="btn btn-secondary all">All</button>
            <button style="background-color: #FFEAD0; color: gray;" type="button" class="btn btn-secondary filter">IT</button>
            <button style="background-color: #FFEAD0; color: gray;" type="button" class="btn btn-secondary filter">Finance</button>
            <button style="background-color: #FFEAD0; color: gray;" type="button" class="btn btn-secondary filter">Marketing</button>
            <button style="background-color: #FFEAD0; color: gray;" type="button" class="btn btn-secondary filter">Sales</button>
        </div>
    </div>
    <div class="container  pt-5">
        <div class="container-fluid d-flex justify-content-center pb-5">
            <input style="border-radius: 100px; width: 350px;" type="text" id="search" placeholder="Enter Name...">
        </div>

        <div class="container">
            <div class="row">


                <?php
        $d = file_get_contents("data.json");
        $d = json_decode($d, true);
        //print_r($d);
        foreach( $d as $k => $v ){
            echo '
            <div class="col-md-3 col-sm-12">
            <div class="card" style="border: none;">
        <img class="card-img-top img-fluid" src="'.$v['ph'].'" style="width: 100%; height: 250px; object-fit: cover; border-radius: 50%; border: 3px solid #FFAB41;"  alt="Card image cap">
        <div class="card-body">
            <ul>
                <li style="font-family: roboto; font-weight: 600; list-style-type: none; color: #B1854E; font-size: 18px;">Name: <span class="name">'.$v['name'].'</span></li>
                <li style="font-family: roboto; font-weight: 600; list-style-type: none; color: #B1854E;">Position: '.$v['pos'].'</li>
                <li style="font-family: roboto; font-weight: 600; list-style-type: none; color: #B1854E;">Phone: '.$v['tel'].'</li>
                <li style="font-family: roboto; font-weight: 600; list-style-type: none; color: #B1854E;">Email: '.$v['email'].'</li>
                <li style="font-family: roboto; font-weight: 600; list-style-type: none; color: #B1854E;">Department: <span class="dept">'.$v['dept'].'</span></li>
            </ul>
            <div>
            <a href="edit.php?'.$k.'" style="background-color: #B1854E;" class="d-flex justify-content-center btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
    </div>
            
            ';
        }
    
    ?>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            // when the button is clicked it will display the project which corre
            $('.filter').click(function() {
                a = $(this).html();
                console.log(a);
                $('.card').each(function() {
                    c = $('.dept', this).html();
                    //console.log(c.indexOf(b) > -1);
                    if (c.indexOf(a) > -1) {
                        $(this).parent().show();
                    } else {
                        $(this).parent().hide();
                    };
                });
            });
            $('.all').click(function() {
                $('.card').parent().show();
            });
            // will print whatever value you input into the search bar
            $('#search').keyup(function() {
                b = $(this).val();
                console.log(b);

                $('.card').each(function() {
                    c = $('.dept', this).html();
                    d = $('.name', this).html();
                    b = b.toLowerCase();
                    c = c.toLowerCase();
                    d = d.toLowerCase();
                    console.log(b, c, d);
                    if (c.indexOf(b) > -1 || d.indexOf(b) > -1) {
                        $(this).parent().show();
                    } else {
                        $(this).parent().hide();
                    };
                });
            });

        </script>
</body>

</html>
