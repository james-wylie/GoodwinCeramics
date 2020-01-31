<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Goodwin Ceramics</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <script src="https://kit.fontawesome.com/19f3e2a020.js" crossorigin="anonymous"></script>


    </head>
    <body style="background-color: #989F7A;">
               
               <div id="app">
                    
                    <router-view></router-view>
               </div>
               
            </div>
        </div>
        <script src="../js/app.js"></script>
    </body>
</html>
