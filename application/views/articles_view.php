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
      <?php foreach ($articles as $article): ?>
        <li>
          <?php echo $article['title'] ?> 
          <span>( <?php echo $article['slug'] ?> )</span>
          <p> <?php echo $article['text'] ?> </p>
        </li>
      <?php endforeach;?>
    </ul>
  </body>
</html>
