
<!--
    Name:Brett Wolfangel
    Date:12/8/2021
    Project: Laravel Blog
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./resources/css/app.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        
        h1{
            text-align: center;
            font-weight: bold;
        }

        body{
            background-color: rgb(14, 193, 238);
        }

        h6{
            margin-top: 15px;
            font-size: 25px;
        }

        footer{
            text-align: center;
            margin-top: 200px;
        }

        .socials{
            display: inline;
            height: 25px;
            width: 25px;
        }
    </style>
</head>
<body>
    @include("partials/menu")
    <div class="container">
        @yield('content')
    </div>
</body>
</html>