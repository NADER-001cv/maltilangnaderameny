<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: poppins ;
        }
        
        header{
            overflow: hidden;
            height: 100vh;
        }
       /* .vd-bc{
           position: absolute;
           right: 0;
           bottom: 0;
           min-height: 100%;
           min-width: 100%;
       } */
          
          .nav-aria1{
              background: rgba(0, 0, 0, 0.5);
              height: 60px;
              position: relative;
              width: 100%;
    
         
          }
          .logo{
              margin: 0 50px;
              height: 60px;
              float: left;
              color: white;
              font-size: 15px;
              text-transform: capitalize;
              font-weight: bold;
              letter-spacing: 2px;
          }

          .list{
              float: right;
              list-style: none;
              margin: 20px;
          }
            .list  li{
                display: inline-block;
                margin: 0 5px;
            }
            .list  li a{

                text-decoration: none;
                color: white;
                padding: 5px 15px;
                letter-spacing: 2px;

            }
            .list li a:hover{
                color: green;
            }
            .bodycon{
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%,-50%);
                  text-align: center;
                  
            }
            .bodycon h2{

                color: white;
                font-size: 55px;
                margin: 0;
            }
/* Style the button used to pause/play the video */
            form{
                margin-top: 50px;
            }
      </style>
</head>
<body>
  
    <div class="nav-aria1">
        <div class="logo">ameni</div>
        <ul class="list">
            <li><a href="">  home</a></li>
            <li><a href="">  about</a></li>
            <li><a href="/contact">  contact</a></li>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
            </li>
         
            @endforeach
        </ul>
    </div>

        <div class="container">


            <form  >
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
                </div>
                <div class="form-group">
                  <label for="">Message</label>
                
               <textarea class="form-control" rows="8px"></textarea>  
                </div>
         
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>