<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--    <!--[if lt IE 9]>-->
<!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
<!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    <style>

        header{
            position: fixed;
            top: 0;
            width:100%;
            margin-top: 0;
            background : #569EDD;
            overflow: auto;
            padding: 5px;
        }
        header h1{
            margin-top: 0;
            display: inline;
            float: left;
            line-height: 100px;
            transition: all 0.3s;
        }
        header ul{
            list-style-type: none;
            float: right;
            line-height: 100px;
            transition: all 0.3s;
        }
        header li{
            display: inline-block;
        }
        header.scrolled h1{
            line-height: 50px;
        }
        header.scrolled ul{
            line-height: 50px;
        }
        @media screen and (max-width: 480px){
            header h1{
                display: block;
                float: none;
                text-align: center;
                line-height: 50px;
            }

            header ul {
                padding: 0;
                text-align: center;
                float: none;
                line-height: 50px;
            }
        }
        @media screen and (max-width: 480px){
            header.scrolled h1{
                line-height: 25px;
            }
            header.scrolled ul{
                line-height: 25px;
            }
        }
    </style>
</head>
<body>


<header>
    <h1>Goals 2015</h1>
    <ul>
        <li>Menu 1</li>
        <li>Menu 2</li>
        <li>Menu 3</li>
    </ul>
</header>
<h1 style="height: 3000px;margin-top: 300px;">Hello, world!</h1>
<div class="container">

        <div class="row jumbotron">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <a href="">1. ID : Internship Directory  The largest student database in the philippines</a>
            </div>

        </div>

        <div class="row jumbotron">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <a href="">1. ID : Internship Directory  The largest student database in the philippines</a>
            </div>

        </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


<script>


    $(window).scroll(function() {
        if ($(this).scrollTop() > 1000){
            $('header').addClass("scrolled");
        }
        else{
            $('header').removeClass("scrolled");
        }
    });
</script>
</body>
</html>