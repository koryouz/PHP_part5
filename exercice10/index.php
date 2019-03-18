<?php $department = array('02' => 'Aisne','59' => 'Nord','60' =>'Oise','62' => 'Pas-de-Calais','80' => 'Somme');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP P5E10</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
          foreach($department as $cle => $element)
          {
            ?><p><?php echo 'Le département '.$element.' a le numéro '.$cle;?></p><?php
          }
        ?>
      </div>
    </div>
  </body>
</html>
