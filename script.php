<script scr = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type="text/javascript">
function submitData(action){
    $(document).ready(function(){
        var data = {
            action:  action,
            id: $("#id").val(),
            name: $("#name").val(),
            email: $("#email").val(),
            gander: $("#gander").val();
        };
        $.ajax({
            url: 'function.php',
            type: 'post',
            data: data,
            succes:function(response){
                alert(response);
                if(response == "Delete Successfully"){
                    $("#"+action).css("display", "none");
                }
            } 
        })
    });

    }
</script>