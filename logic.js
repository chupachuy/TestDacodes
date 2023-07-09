$(function(){
    var continentOptions;
    var countryOptions;
    var stateOptions;
    var districtOptions;
        $.getJSON('../wp-content/themes/test/continents.json',function(result){
            $.each(result, function(i,continent) {
                //<option value='continentcode'>contryname</option>
                continentOptions+="<option value='"
                +continent.code+
                "'>"
                +continent.name+
                "</option>";
                 });
            $('#continent').html(continentOptions);
        });


        /*** EUROPE  */
        $("#continent").change(function(){
        //alert($(this).val());
        $('option', '#country').remove();
        if($(this).val()=="EU" /** EUROPA */){
            //alert($(this).val());
            $.getJSON('../wp-content/themes/test/countriesEurope.json',function(result){
                $.each(result, function(i,country) {
                    //<option value='countrycode'>contryname</option>
                    countryOptions+="<option value='"
                    +country.code+
                    "'>"
                    +country.name+
                    "</option>";
                     });
                     $('#country').html(countryOptions);
            });

            /*** PAISES DE EUROPA */

            $("#country").change(function(){
                $('state').remove();
                if($(this).val()=="FR"){
                    $.getJSON('../wp-content/themes/test/statesFrance.json',function(result){
                    $.each(result, function(i,district) {
                        districtOptions+="<option value='"+district.name+"'>"+district.name+"</option>";
                        });
                        $('#state').html(districtOptions);
                    });
                }else if($(this).val()=="DE"){
                    $.getJSON('../wp-content/themes/test/statesGermany.json',function(result){
                        $.each(result, function(i,district) {
                            districtOptions+="<option value='"+district.name+"'>"+district.name+"</option>";
                            });
                            $('#state').html(districtOptions);
                    });
                }else if($(this).val()=="IT"){
                    $.getJSON('../wp-content/themes/test/statesItali.json',function(result){
                        $.each(result, function(i,district) {
                            districtOptions+="<option value='"+district.name+"'>"+district.name+"</option>";
                            });
                            $('#state').html(districtOptions);
                    });
                }else if($(this).val()=="PT"){
                    $.getJSON('../wp-content/themes/test/statesPortugal.json',function(result){
                        $.each(result, function(i,district) {
                            districtOptions+="<option value='"+district.name+"'>"+district.name+"</option>";
                            });
                            $('#state').html(districtOptions);
                    });
                }else if($(this).val()=="ES"){
                    $.getJSON('../wp-content/themes/test/statesSpain.json',function(result){
                        $.each(result, function(i,district) {
                            districtOptions+="<option value='"+district.name+"'>"+district.name+"</option>";
                            });
                            $('#state').html(districtOptions);
                    });
                }


            });


            
         /*** AMERICA  */    
        } else if($(this).val()=="AM" /** AMERICA */){

         /*** ASIA  */
        } else if($(this).val()=="AS" /** ASIA */){


         /*** AFRICA  */
        }else if($(this).val()=="AF" /** AFRICA */){


         /*** OCEANIA  */
        }else if($(this).val()=="OC" /** OCEANIA */){


            
        }
        

    });




        
        /*$("#state").change(function(){
        if($(this).val()=="AGS"){
                $.getJSON('../wp-content/themes/test/MHDstates.json',function(result){
                $.each(result, function(i,district) {
                    //<option value='districtName'>districtName</option>
                    districtOptions+="<option value='"
                    +district.name+
                    "'>"
                    +district.name+
                    "</option>";
                     });
                     $('#district').html(districtOptions);
                });
            }
        });*/
        
    }); /** END FUNCTION  */
    