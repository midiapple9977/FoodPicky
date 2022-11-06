 function toggleStatus(id){
    var id = id;
    $.ajax({
        url:"toggle.php",
        type:"post",
        data:{catId:id},
        success : function(result){
            if(result == '1'){
                swal("Done!", "You made item hidden", "success");
            }else{
                swal("Done!", "You made item  visible", "success");
            }
        }
    });
 }