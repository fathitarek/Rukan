<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Fat</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Fat</h1>
            <form method = 'get' action = '{{url("fat")}}'>
                <button class = 'btn blue'>Fat Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("fat")}}/{{$fat->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                                
                <button class = 'btn red' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script>
    $('select').material_select();
    </script>
</html>
