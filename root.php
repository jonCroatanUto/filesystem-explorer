<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <title>Document</title>
</head>
  <body>
    <?php
    
      require("./functions/dirManege.php");
        makedir();
        scan();
    ?>
  <!-- 
  <script src="script.js"></script> -->
  </body>
</html>
