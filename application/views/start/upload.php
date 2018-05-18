<html>
  <head>
    <title>Upload Form</title>
  </head>
  <body>
    <?php echo ($error) ? $error : '' ?>
    <form action="http://localhost/CI_test/start/do_upload" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <input type="file" name="userfile" size="20">
      <br><br>
      <input type="submit" value="upload">
    </form>

    <ul>
      <?php foreach ($upload_data as $item => $value):?>
      <li><?php echo $item;?>: <?php echo $value;?></li>
      <?php endforeach; ?>
    </ul>

  </body>
</html>
