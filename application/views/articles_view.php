<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <title><?php echo $title;?></title>
  </head>
  <body>
    <h1>Articulos</h1>

    <ul>
      <?php foreach ($articles as $title=>$body): ?>
        <li> <?php echo $title ?>  <span> <?php echo $body ?> </span></li>
      <?php endforeach;?>
    </ul>
  </body>
</html>
