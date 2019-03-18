<?php $department = array('2' => 'Aisne','59' => 'Nord','60' =>'Oise','62' => 'Pas-de-Calais','80' => 'Somme');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP P5E9</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
        foreach($department as $element)
          {
            ?><p><?= $element ;?></p><?php
          }
        ?>
      </div>
    </div>
  </body>
</html>
