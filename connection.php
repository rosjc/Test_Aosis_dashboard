<?php if (isset($_POST['name_city_e']) AND isset($_POST['name_city_s']))
        {
            $name_city_e = !empty($_POST['name_city_e']) ? $_POST['name_city_e'] : NULL;
            $name_city_s = !empty($_POST['name_city_s']) ? $_POST['name_city_s'] : NULL;
    
        
            //Chargement de la base de données
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=clem_aosis;charset=utf8', 'root', '');     
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
    
    
           // $req1 = $bdd->query("SELECT MARCHE FROM clem WHERE GARE_NAME LIKE '$name_city_e' ");
           //  $req2 = $bdd->query("SELECT MARCHE FROM clem WHERE GARE_NAME LIKE '$name_city_s' ");
            
            
            
            //Selection des données présente dans la ville de départ et d'arrivée
            
            $req0 = $bdd->query("SELECT d.MARCHE, a.MARCHE FROM clem AS d INNER JOIN clem AS a ON a.MARCHE = d.MARCHE WHERE d.GARE_NAME = '$name_city_e' ");

           
            
            
            
            
            $donnee0 = $req0 -> fetch();
            $num_donnee = $req0->rowCount();
            
            if($num_donnee == 0)
            {
                echo 'Impossible, cet email existe deja dans la base de donnees';
            }
            else{
                 
                 echo '<P>'.$donnee0['MARCHE'].'</p>';
                 
             }
            
       
        }
                
   
          ?>
