<?php
/*
Template Name: Buscador
*/
?>

<?php get_header(); ?>

<main>
    <div class="container">
        <h1>BUSCADOR</h1>

        <h2></h2>

        <select name="country" id="country">
            <option value=""></option>
        </select>

        <select name="state" id="state">
            <option value=""></option>
        </select>

        <select name="district" id="district">
            <option value=""></option>
        </select>



        <script>

            $(function(){
                //alert("hooola");

                $.getJSON('http://localhost/pruebas/wp-content/themes/test/countries.json', function(result){
                    $.each(result, function(i, country){
                        alert(country.name + " " + country.code);
                    });
                });
            });

            

            /*$(document).ready(function(){
                alert("Hooola");
            });*/


        </script>
    </div>
</main>

    


<?php get_footer(); ?>