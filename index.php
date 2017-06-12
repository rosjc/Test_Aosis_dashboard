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
        
            <form method="post" action="index.php">
            
                <p>
                    <label for="city" class="city">Nom de la ville de départ :</label>
                    <input type="text" name="name_city_e" id="name_city_e"placeholder="Ex : Toulouse" required/>
                </p>
                
                
                <p>
                    <label for="city" class="city">Nom de la ville d'arrivée't :</label>
                    <input type="text" name="name_city_s" id="name_city_s"placeholder="Ex : Toulouse" required/>
                </p>
                
                
                <p>
                    <input type="submit" name="submit" id="submit" value="Valider" />
                </p>
            </form>
            </br>
        <?php
        
        //Chargement des champs du formulaire
        
        if (isset($_POST['name_city_e']) AND isset($_POST['name_city_s']))
        {
            $name_city_e = !empty($_POST['name_city_e']) ? $_POST['name_city_e'] : NULL;
            //$name_city_e = htmlspecialchars($_POST['name_city_e']);
            $name_city_s = htmlspecialchars($_POST['name_city_s']);




            //Chargement de la base de données
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=clem_aosis;charset=utf8', 'root', '');     
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }


            $marche_input = $bdd->query("SELECT MARCHE FROM clem WHERE GARE_NAME = '$name_city_e' ");


            $marche_output = $bdd->query("SELECT MARCHE FROM clem WHERE GARE_NAME = '$name_city_s' ");

            //Chargement de la ligne données correspond au champ 'nom de la gare de départ'
            $req1 = $bdd->query("SELECT * FROM clem WHERE GARE_NAME = '$name_city_e' ");

            //Condition de la ville d'arrivée
            if($marche_input = $marche_output)
                { 
                $req2 = $bdd->query("SELECT * FROM tableau_3 WHERE GARE_NAME = '$name_city_s' ");
                }
             while ($donnees1 = $req1->fetch()) {


     
  
    ?>
            <p>hello <?php echo $_POST['$marche_input'] ?> est bien une ville</p>
            </br>
         
           
           
                
       
            
    </section>
      <?php
             }
}
        
    ?>
    </body>
        
        
    
 
    



      

</html>