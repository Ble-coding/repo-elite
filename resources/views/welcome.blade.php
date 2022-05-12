<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ELITE CREDIT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


             <!-- Styles -->
             <style>
                html, body {
                    background-color: #FFF;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }
    
                .full-height {
                    height: 100vh;
                } 
    
                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                    background:url(../assets/images/png/login3.png) no-repeat fixed 50% 50% / 100% 150%!important;
                }
    
                .position-ref {
                    position: relative;
                }
    
                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }
    
                .content {
                    text-align: center;
                    position:absolute;
                    background:rgba(0,0,0,0.5);
                    top:0;
                    left:0;
                    right:0;
                    bottom:0;
                    
                }
    
                .title {
                    font-size: 84px;
                    color:#fff;
                    margin-top:100px;
                    font-weight:600;
                }
    
                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }
    
                .m-b-md {
                    margin-bottom: 30px;
                }
    
                .img-float{
                    position: absolute;
                    bottom:0;
                    left:20px;
                }
            </style>
    </head>
    <body class="">
        <div class="flex-center position-ref full-height">
            <div class="content p-5">
                <div class="title">
                    {{-- ELITE ALLIANCE --}}
                </div>
                <h1 style="color:#fff">Bienvenue, sur votre plateforme GESTELITE</h1>
                    <a href="{{ url('/login') }}" class="btn btn-primary btn-lg mb-3" style="text-decoration:none;color:#FFF;padding: 10px;background:#ff0017;border:0;font-weight:bold;border-radius:40px;width:400px">CONNECTEZ-VOUS</a>
                    <p class="font-weight-bold" style="margin-top:40px;color:#FFF;">@copyright <script>document.write(new Date().getFullYear())</script> <strong style="color:#fff">E</strong><strong>A</strong> (<strong style="color:#fff">ELITE ALLIANCE</strong> all rights reserved)</p>
                </div>
           </div>
    </body>
</html>
