<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="theme-color" content="#1C5DAB" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="MyPWA" />
    <link rel="apple-touch-startup-image" href="./img/logo.png" />
    <link rel="apple-touch-icon" href="./img/logo.png" />
    <meta name="msapplication-TileImage" content="./img/logo.png" />
    <meta name="msapplication-TileColor" content="#1C5DAB" />
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
    <link rel="icon" type="image/png" href="./img/logo.png" />
    <link rel="author" type="text/plain" href="./humans.txt" />
    <link rel="sitemap" type="application/xml" title="Sitemap" href="./sitemap.xml" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css") ?>">

    <title><?php echo $title ?></title>
  </head>
  <body>
    <div class="container">
    <div id="taskApp">
      <h1 class='text-center'> {{nameApp}} </h1>
      <!-- Add task from -->
      <div class="mb-2">
        <form v-on:submit='addTask'>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="New task" v-model='tasks.title'>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Task comment" v-model='tasks.comment'>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" value="Add">
          </div>
      </div>
      </form>
      <!-- Tasks table -->
      <table class="table">
        <thead>
          <tr>
            <th>Done</th>
            <th>Task name</th>
            <th>Task comment</th>
            <th>Delete</th>
            <th>Modify</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for='task in tasks'>
            <td> <input type="checkbox" v-model='task.done'> </td>
            <td> <span v-bind:class='{taskDone: task.done}'>{{task.title}}</span> </td>
            <td> <span v-bind:class='{taskDone: task.done}'>{{task.comment}}</span> </td>
            <td> <button v-on:click='deleteTask(task)' class="btn btn-danger"> <i class="far fa-trash-alt"></i> </button> </td>
            <td> <button v-on:click='updateTask(task)' class="btn btn-success"> <i class="fas fa-pencil-alt"></i> </button> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>
  <!-- Import Vue.js -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> <!-- Develop version -->
  <!-- <script src="https://unpkg.com/vue@2.5.13/dist/vue.min.js"></script> -->
  <script src="<?php echo base_url("assets/scripts/todo.js") ?>" charset="utf-8"></script>
  </body>
</html>
