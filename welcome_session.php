
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>*My Website*</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">*My Websiteeee*</span>

    <form action="logout.php" method="POST">

          <button type="submit" class="btn active" aria-pressed="true">*LOG OUT*</button>

        </form>
  </div>
</nav>

<div class="card text-center" style="margin: 70px;">
  <div class="card-header">
    <b><h3>ID</h3></b>
  </div>
  <div class="card-body">
    <h5 class="card-title">INTRODUCTION</h5>
    <p class="card-text">

    <?php

session_start();

echo "*Welcome in our Website!!*";
if (isset($_SESSION["username"])) {

    echo "<h1>welcome in our website "."<br>".$_SESSION["username"]."</h1>";
    echo "<b>favourite hobby ".$_SESSION["favourite_hobby"]."</b>";
}
?>
 </p>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>