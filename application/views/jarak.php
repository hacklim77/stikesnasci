<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <script src="<?= base_url("assets/js/jarak.js") ?>"></script>
    <script>
    /* document.forms["location"].submit(); */
    /* $("#location").click(function() {
    $("#hasil").submit();
    
    }); */
    //document.location.submit();
    /* function kirim(){
        document.getElementById('location').submit();
    } */
   /*  window.onload = function(){
        document.forms['location'].submit();
    } */

</script>
</head>
<body>
<!-- <script>
    $(document).ready(function(){
        $('#location').submit(ajax);
        return false;
    })
    function ajax(){
        $.ajax({
            url : '',
            type : 'POST',
            data : $('form').serialize(),
            success : function(data){
                $('#hasil').html(data);
            }
        });
        return false;
    }

    window.onchange=function(){
        setInterval(ajax,10000);
    }
</script> -->

<form action="<?= base_url('jarak/proses') ?>" method="post" id="location" name="location">
    <div id="divSample" class="hideClass">
        <input type="text" id="Latitude" name="Latitude1">    
        <input type="text" id="Longitude" name="Longitude1">
        <input type="text" id="Latitude2" name="Latitude2" value="<?= $dist[0] ?>">
        <input type="text" id="Longitude2" name="Longitude2" value="<?= $dist[1] ?>">
       
    </div>
    
</form>


<div id="hasil"><p>hasil <?= $hitung ?> Km</p></div>
</body>

</html>