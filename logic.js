$(document).ready(function() {

    load_json_data('continente');

    function load_json_data(id, parent_id) {
        var html_code = '';
        $.getJSON('../wp-content/themes/test/country.json', function(data) {

            html_code += '<option value="">Select ' + id + '</option>';
            $.each(data, function(key, value) {
                if (id == 'continente') {
                    if (value.parent_id == '0') {
                        html_code += '<option value="' + value.id + '">' + value.name + '</option>';
                    }
                } else {
                    if (value.parent_id == parent_id) {
                        html_code += '<option value="' + value.id + '">' + value.name + '</option>';
                    }
                }
            });
            $('#' + id).html(html_code);
        });

    }

    $(document).on('change', '#continente', function() {
        var continente_id = $(this).val();
        if (continente_id != '') {
            load_json_data('pais', continente_id);
        } else {
            $('#pais').html('<option value="">Select pais</option>');
            $('#estado').html('<option value="">Select estado</option>');
        }
    });
    $(document).on('change', '#pais', function() {
        var pais_id = $(this).val();
        if (pais_id != '') {
            load_json_data('estado', pais_id);
        } else {
            $('#estado').html('<option value="">Select Estado</option>');
        }
    });


});