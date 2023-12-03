
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chess</title>
</head>
<body>

<?php



echo('<div class="container">');


for ($i=0; $i < 4; $i++) { 
      for ($j=0; $j < 4; $j++) { 
            echo('<div class="white"></div>');
            echo('<div class="black"></div>');
      }
      for ($j=0; $j < 4; $j++) { 
            echo('<div class="black"></div>');
            echo('<div class="white"></div>');
      }
}


echo('</div>');
echo ("
      <style>
      
      body {
            background-color: #bcbcbc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
      }

      .container {
            
            border: 1px solid #000;
            display: grid;
            grid-template-columns: repeat(8, 80px);

      }
      
      .white {
            background-color: #fff;
            width: 80px;
            height: 80px;
      }

      .black {
            background-color: #000;
            width: 80px;
            height: 80px;
      }
      
      
      </style>"
);

?>
      
</body>
</html>


