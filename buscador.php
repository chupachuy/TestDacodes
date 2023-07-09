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

        Country:

        <select name="country" id="country">
            {countryOptions}
        </select>

        State:

        <select name="state" id="state">
            <option value=""></option>
        </select>

        District:

        <select name="district" id="district">
            {stateOptions}
        </select>



        <script>

            

            

            /*$(document).ready(function(){
                alert("Hooola");
            });*/


        </script>
    </div>
</main>

    


<?php get_footer(); ?>