<!DOCTYPE html>
<html>

    <head>
    
    
        <title>Aosis Dashboard</title>
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="chemin/feuille.css">
        <script type="text/javascript" src="chemin/fichier_js.js" ></script>
        
    
    </head>

    


    <body>
        
        <header>
            <h1> Information SNCF           </h1>
        </header>
        
        <section id = "section1">
        
            <form method="post" action="progra_te.php" id="formulaire">
            
                <p>
                    <label for="city" class="city">Nom de la ville de départ :</label>
                    <input type="text" name="name_city_e" id="name_city_e"placeholder="Ex : Toulouse" required/>
                </p>
                
                
                <p>
                    <label for="city" class="city">Nom de la ville d'arrivée :</label>
                    <input type="text" name="name_city_s" id="name_city_s"placeholder="Ex : Toulouse" required/>
                </p>
                
                
                <p>
                    <input type="submit" name="submit" id="submit" value="Valider" />
                </p>
                <p>
                    <input type="reset" name="reset" id="reset" value="reset" />
                </p>
            </form>
            </br>
            
            
                  
        </section>
        <p id="connect"><?php include("connection.php"); ?> </p>
        <script src="JQuery/jquery-3.1.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <?php include("verification_champ.js"); ?>                
        
    
    
   
    
           
            
        
    
    
     </body>
        
        
    

      

</html>















 
          
              
              
              
              
              
         
          