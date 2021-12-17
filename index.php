<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo esercizio php</title>
   
</head>
<body> 

    <?php 
        $ex =" Esercizio PHP";
        $nome ="Giantommaso";

    ?>
    
    <h1> <?php echo  $ex  ?></h1>

    <h2> ciao <?php echo  $nome  ?></h2>

    <h2> il nome <?php echo  $nome  ?> &egrave lungo <?php echo strlen($nome) ?>   caratteri</h2>

    <!-- style -->
    <style>
        *{  padding:0;
            margin:0;
            box-sizing:border-box;
            text-align:center;
        }
    </style>
</body>
</html>