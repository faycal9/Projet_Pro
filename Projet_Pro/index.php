<!-- Création de l'index du projet pro -->
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        
        <!-- pour afficher chaque contenu de façon approprié selon le type d'écran-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Ma Propre Galerie Photo</title>
        
        <link href="CSS/style_projet_pro.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- c'est ce qui sera affiché dans le navigateur en guise de description du site -->
        <meta name="description" content="page d'accueil du site">
        <meta name="author" content="Fayçal Yahiaoui">
        
        
        
        
        <!-- The Favicon is the small symbol in the browser tab
        <link rel="shortcut icon" href="static/favicon.ico" type="image/x-icon">-->
        
        <!-- Pour spécifier la manière dont les moteurs de recherches doivent indexer notre contenu-->
        
        <meta name="robots" content="index, follow">       <!-- Pour tous les moteurs de recherche-->
        <meta name="googlebot" content="index, follow">    <!--  Pour google seulement-->
        
    </head>
    
    <body>
        
        <main id="wrapper">
            
            
            <section class="myheader" id="header">
            
                
              <!-- on inclut le header puis le menu -->
              <?php include ("maquette_site/header.php");?>
              
              <?php include("maquette_site/menu.php"); ?>
            
            </section>
            
            <section class="myburger" id="menu_burger">  
            <?php include("maquette_site/menu_burger.php"); ?>       
            </section>
            
            <section class="mymain" id="main">
            
            <p> Bienvenue sur le meilleur site pour créer votre popre galerie photo. Ne laissez plus tainer vos photos dans un tiroir, dans le disque dur de votre ordinateur ou au fond de votre smartphone. Donnez leur vie dans un magnifique slide-show et intégrer celui-ci dans votre propre site web ou blog. Simple, ludique et rapide amusez-vous !</p>
                
            </section>
        
        
        
        
        <script>
            
            
            /*var icon=document.querySelector(".icon");
            icon.style.display="none";*/
             var menu_burger = document.getElementById("menu_burger");
             var main= document.getElementById("main");
            
            
            
        function myFunction() {
            
           
            if (menu_burger.className === "myburger") {
            menu_burger.className += " responsive";
            main.className +=" responsive";    
                
            } else {
            menu_burger.className = "myburger";
            main.className ="mymain";    
            }
   
        }    
            
            
        </script>
        
        </main>
    
        
        <!-- on inclut le footer -->
        <?php include("maquette_site/footer.php"); ?>
    
    
    
    
    </body>


</html>