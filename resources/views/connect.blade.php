<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel connection</title>
</head>
<body>
    <div>
        <?php 
        use Illuminate\Support\Facades\DB; // Ensure you are using the DB facade
            if(DB::connection()->getPdo()){
                echo "connection true database name:".DB::connection()->getDatabaseName();
            }    
        ?>
    </div>
</body>
</html>