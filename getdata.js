$(document).ready(function(){
    $("#fetchval").on('change', function(){
        var value = $(this).val();
        
        $.ajax({
            url:"fetch.php",
            type:"POST",
            data:'request=' + value,
            beforeSend:function(){
                    $(".newcontainer").html("<div class='processing'>Processing...</div>");
                    $("#TheSppingWheel").show();
                   
            },
            complete:function(){
                $("#TheSppingWheel").hide();
            },
            
            success:function(data){
                $(".newcontainer").html(data );
            },
            error:function(){
                $(".newcontainer").html("<div class='processing'>Error</div>");
            }
        })
        
    })
})