 <script>
    
        $name_city_e.keyup(function(){

            if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5

                $(this).css({ // on rend le champ rouge

                    borderColor : 'red',

                color : 'red'

                });

            }

            else{

                 $(this).css({ // si tout est bon, on le rend vert

                 borderColor : 'green',

                 color : 'green'

                });

            }

        });


    
    
    
    
    
    
        $name_city_s.keyup(function(){

            if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5

                $(this).css({ // on rend le champ rouge

                borderColor : 'red',

                color : 'red'

                });

            }

            else{

                 $(this).css({ // si tout est bon, on le rend vert

                 borderColor : 'green',

                 color : 'green'

                });

            }

        });
    
    
    
        function verifier(name_city_e){

            if(name_city_e.val() == ""){ // si le champ est vide

                $erreur.css('display', 'block'); // on affiche le message d'erreur

                name_city_e.css({ // on rend le champ rouge

                    borderColor : 'red',

                    color : 'red'

                });

            }

        }
    
        function verifier(name_city_s){

            if(name_city_s.val() == ""){ // si le champ est vide

                $erreur.css('display', 'block'); // on affiche le message d'erreur

                name_city_s.css({ // on rend le champ rouge

                    borderColor : 'red',

                    color : 'red'

                });

            }

        }
    
      $submit.click(function(e){

            e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi


            // puis on lance la fonction de vérification sur tous les champs :

            verifier($name_city_s);

            verifier($name_city_e);


    });  
    
    $reset.click(function(){

        $champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS

            borderColor : '#ccc',

            color : '#555'

        });

        $erreur.css('display', 'none'); // on prend soin de cacher le message d'erreur

    });
       /*
            $(function(){
                $('input:submit').click(function(){
                });
                 // on sélectionne un input de type button
            })(jQuery);*/
</script>