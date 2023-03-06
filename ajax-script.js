
// State_insert
$(document).on("submit","#state_form",function(e){

        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "ajax_state_insert.php",
            data: $(this).serialize(),
            success: function(data) {
                $("#msg").html(data);
                $("#state_form").find("input");
            }
        });
    });

// City_insert
$(document).on("submit","#city_form",function(e){

        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "ajax_city_insert.php",
            data: $(this).serialize(),
            success: function(data) {
                $("#msg").html(data);
                $("#city_form").find("input");
            }
        });
    });


// select-state-city
$(document).ready(function(){
    $("#state").on('change',function(){
        var stateID = $(this).val();
            $.ajax({
                method: "POST",
                url: "ajax_get_city_data.php",
                data: 'state_id='+stateID,
                success: function(data){
                    $("#city").html(data);
                }
            });
    });
});