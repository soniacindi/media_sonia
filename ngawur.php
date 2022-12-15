<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> -->

    <title>LoginKuyBelajar</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: darkgrey;
        }
        .row{
            background: white;
            border-radius: 30px ;
            box-shadow: 12px 12px 22px grey;
        }
        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .btnlogin{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold; 
        }
        .btnlogin:hover{
            background: white;
            border: 1px solid;
            color: black;
        }
    </style>
  </head>
  <body>
    
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="image/login.jpg" class="img-fluid" alt="">
              </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">KuyBelajar LOGIN</h1>
    <form>
        <div class="form-row">
            <div class="col-lg-7">
            <input type="email" placeholder="Email-Adress" class="form-control my-3 p-4" > 
            </div>
        </div>
    <form>
        <div class="form-row">
            <div class="col-lg-7">
            <input type="paswword" placeholder="******" class="form-control  my-3 p-4"> 
        </div>
    </div>
        <div class="form-row">
            <div class="col-lg-7">
            <button type="button" class="btnlogin my-3 mb-5">Login</button>  
        </div>
    </div>
        <a href="#">Lupa Password</a>
        <p>Don't have an account? <a href="#">Daftar</a></p>
     </form>
            </div>
        </div>
    </div>
</section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>