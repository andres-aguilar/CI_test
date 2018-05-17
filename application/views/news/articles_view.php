<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/news.css") ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <title><?php echo $title;?></title>
  </head>
  <body>
      <nav class="nav">
        <h1>Articulos</h1>
        <div class="inline float-right">
          <a href="#"><i class="fas fa-bell"></i></a>
          <a href="#"><i class="fas fa-sign-out-alt"></i></a>
        </div>
      </nav>

    <div class="content">
      <?php foreach ($articles as $article): ?>
      <article class="card top-space lateral-padding">
          <div class="title">
            <h2> <?php echo $article['title'] ?> <span class="small-font">( <?php echo $article['slug'] ?> )</span> </h2>
          </div>
          <p class="top-space justify small-padding"> <?php echo $article['text'] ?> </p>
      </article>
      <?php endforeach;?>
    </div>

    <footer class="footer small-padding small-font top-space">
      <div class="">
        <p>Quienes somos?</p>
        <p>Terminos y condiciones</p>
        <p>Contacto</p>
      </div>
    </footer>
  </body>
</html>
