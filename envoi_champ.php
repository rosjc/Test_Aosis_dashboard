<scritp>
$(document).ready(function(){

    /*
     * Ecoutons l'évènement click()
     */

    $("#submit").click(function(){

       $.post(
            'progra_te.php',
            {
                ville1 : $("#name_city_e").val(),
                ville2 : $("#name_city_s").val()
            },
            function(data){


            },
            'sql'
        );

    });
</scritp>