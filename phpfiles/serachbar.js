 $(document).ready(function(){
    $("#thesearchbtn").attr('disabled', true);
    $('input[id="search"]').on('keyup', function(){
        $("#thesearchbtn").attr('disabled', false);
    })
 })