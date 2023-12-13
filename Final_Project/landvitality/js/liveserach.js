$(document).ready(function(){

    $("#liv_srch").keyup(function(){

        let input = $(this).val();
        //alert(input);

        if(input !="")
        {
            $.ajax({

                url:"../controller/livsearch.php",
                method:"POST",
                data:{input:input},

                success:function(data){
                    $("#searchresult").html(data);
                }

            });
        }

        else{
            //$("#searchresult").css("display","none");
            alart("No data found");
        }

    });
});