
    

$(document).ready(function(){
  
    $("#search").keyup(function(){
        var searchtext = $(this).val();
        if(searchtext !=''){
            $.ajax({
                url:'action.php',
                method:'post',
                data:{query:searchtext},
                success:function(response){
                    $("#show-list").html(response);
                }
            });
        }else{
         
            $("#show-list").html('');
        }
    });
    $(document).on('click','a', function(){
        $("#search").val($(this).text());
        $("#show-list").html('');
    });
});