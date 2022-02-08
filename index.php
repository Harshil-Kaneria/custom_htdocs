<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Mata Tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
   <title>Localhost</title>
   <!-- Bootstrap 4 css cdn-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class="table table-hover">
  <thead>
    <tr class="table-danger">
      <th scope="col">Websites List</th>
      <th scope="col">Url</th>
    </tr>
  </thead>
  <tbody>
   <?php
$resource = opendir('./');
$not_allowed = array('.', '..', '.htaccess', 'info.php', 'index.php','main.php');
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


        echo '<tr class="table-warning"><th><a style="text-decoration: none;" class="text-muted" target="_blank" href="'.$actual_link.'db">Database</a></th><th><a target="_blank" href="'.$actual_link.'db">'.$actual_link.'db</a></th></tr>';
        echo '<tr class="table-warning"><th><a style="text-decoration: none;" class="text-muted" target="_blank" href="'.$actual_link.'info">Server Info</a></th><th><a target="_blank" href="'.$actual_link.'info">'.$actual_link.'info</a></th></tr>';
while (($entry = readdir($resource)) !== false) {
    if (!in_array($entry, $not_allowed)) {
        echo '<tr class="table-success"><th>';
        echo '<a style="text-decoration: none;" class="text-muted" target="_blank" href="'.$actual_link . $entry . '">' . $entry . '</a>';
        echo "</th>";
        echo "<th>";
        echo '<a target="_blank" href="'.$actual_link . $entry . '">' .$actual_link .$entry . '</a>';
        echo "</th></tr>";
    }
}
?>
</tbody>
   <!-- Jquery cdn-->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <!-- Popper js cdn-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <!-- Bootstrap 4 js cdn-->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
