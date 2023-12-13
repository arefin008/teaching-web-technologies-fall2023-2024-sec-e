$(document).ready(function(){

    $("#solsh").keyup(function(){

        let input = $(this).val();
        //alert(input);

        if(input !="")
        {
            $.ajax({

                url:"../controller/solsearchUser.php",
                method:"POST",
                data:{input:input},

                success:function(data){
                    $("#solsearch").html(data);
                }

            });
        }

        else{
            //$("#searchresult").css("display","none");
            alart("No data found");
        }

    });
});