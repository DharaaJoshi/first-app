<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    use Illuminate\Support\Facades\DB;

       if(DB::connection()->getPdo()){

            echo"connection done....".DB::connection()->getDatabaseName();
       }
    ?>
</body>
</html>