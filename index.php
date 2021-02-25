<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>

    <?php
      $lorem = 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
      $loremLength = strlen($lorem);
    ?>

    <br>
    <div>Testo originale: <?php echo $lorem; ?></div>
    <br>
    <div>Lunghezza testo: <?php echo $loremLength; ?> lettere</div>
    <br>
    <div>Testo modificato: <?php echo str_replace($_GET['badWord'], '***', $lorem);?></div>
    
  </body>
</html>