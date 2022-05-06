<?php
// var_dump($_GET);


if(($_GET['name']== "cosmo")){
    $theme = $_GET['url'];
    header("Location: index.php");   
}elseif(($_GET['name']== "cyborg")){   
    $theme = $_GET['url']; 
    header("Location: index.php");   
}elseif(($_GET['name']== "flatly")){   
    $theme = $_GET['url'];    
}elseif(($_GET['name']== "journal")){   
    $theme = $_GET['url'];    
}elseif(($_GET['name']== "litera")){   
    $theme = $_GET['url'];    
}elseif(($_GET['name']== "lux")){   
    $theme = $_GET['url'];    
}else{
    $theme = 'https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css';
}
var_dump($_GET);
var_dump($theme);
// switch ($_GET['name']) {
//     case $_GET['name']== "cosmo":
//         $theme = $_GET['url'];
//         break;
//     case $_GET['name']== "cyborg":
//         $theme = $_GET['url'];
//         break;
//     case $_GET['name']== "flatly":
//         $theme = $_GET['url'];
//         break;
//     case $_GET['name']== "journal":
//         $theme = $_GET['url'];
//         break;
//     case $_GET['name']== "litera":
//         $theme = $_GET['url'];
//         break;
//     case $_GET['name']== "lux":
//         $theme = $_GET['url'];            
//         break;    
// }

