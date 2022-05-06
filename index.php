<?php 
$theme = 'https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css';
echo $theme;
switch ($_GET['name']) {
    case $_GET['name']== "cosmo":
        $theme = $_GET['url'];
        break;
    case $_GET['name']== "cyborg":
        $theme = $_GET['url'];
        break;
    case $_GET['name']== "flatly":
        $theme = $_GET['url'];
        break;
    case $_GET['name']== "journal":
        $theme = $_GET['url'];
        break;
    case $_GET['name']== "litera":
        $theme = $_GET['url'];
        break;
    case $_GET['name']== "lux":
        $theme = $_GET['url'];            
        break;    
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo $theme ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP FORM CRUD</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand " href="index.php?name=cosmo&url=https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css">Themes</a>   

    <div class="collapse navbar-collapse " id="navbarColor01">
      <ul class="navbar-nav me-auto ">        
        <li class="nav-item">
          <a class="nav-link" href="index.php?name=cyborg&url=https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css">Cyborg</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?name=flatly&url=https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css">Flatly</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?name=journal&url=https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/journal/bootstrap.min.css">Journal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?name=litera&url=https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css">Litera</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?name=lux&url=https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css">Lux</a>
        </li>        
      </ul>      
    </div>
  </div>
</nav>

<h2 class="bg-dark text-center text-danger p-3 m-5">Choisir son théme</h2>

</body>
</html>