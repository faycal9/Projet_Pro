<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        
        <!-- pour afficher chaque contenu de façon approprié selon le type d'écran-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Ma Propre Galerie Photo</title>
        
        <link href="CSS/style_projet_pro2.css" type="text/css" rel="stylesheet">
        
        <!-- c'est ce qui sera affiché dans le navigateur en guise de description du site -->
        <meta name="description" content="page d'accueil du site">
        <meta name="author" content="Fayçal Yahiaoui">
        
        
        
        
        <!-- The Favicon is the small symbol in the browser tab
        <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon">-->
        
        <!-- Pour spécifier la manière dont les moteurs de recherches doivent indexer notre contenu-->
        
        <meta name="robots" content="index, follow">       <!-- Pour tous les moteurs de recherche-->
        <meta name="googlebot" content="index, follow">    <!--  Pour google seulement-->
        
        
        <style>
        
        /* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}
            
/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
    display: none;
}
       /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
            
        
        
        
        </style>
        
    </head>
    
    <body>
   
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
    
        <script> 
            
            
            /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.querySelector(".icon");
   
        
        </script>
    
    
    </body>


</html>