<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
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
         .vd-bc{
             position: absolute;
             right: 0;
             bottom: 0;
             min-height: 100%;
             min-width: 100%;
         }
            
            .nav-aria1{
                background: rgba(0, 0, 0, 0.5);
                height: 60px;
                position: absolute;
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

        </style>
    </head>
    <body>


              
             

              




                
             

















        












        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}


                    
          <header>

            <video           src="{{asset('video/onev.mp4')}}" class="vd-bc" autoplay muted loop>
             
              </video>
              
           
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

                
                  <!-- Use a button to pause/play the video with JavaScript -->
                 
              </div>
              <div class="bodycon">
                  <h2>
                      {{__('messages.welcome')}}
                  </h2>
              </div>
          </header>

              
               


           


        







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

   
    
    </body>
</html>
