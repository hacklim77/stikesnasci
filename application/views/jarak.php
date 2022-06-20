<script type="text/javascript">
    
    function getLocationConstant(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Your browser or device doesn't support Geolocation");
        }
    }

    // If we have a successful location update
    function showPosition(position) {
        document.getElementById("Latitude").value = position.coords.latitude;
        document.getElementById("Longitude").value = position.coords.longitude;
        document.getElementById("location").submit();
    }

    // If something has gone wrong with the geolocation request
    function showError(position) {
        alert("Error code " + position.code + ". " + position.message);
    }

    getLocationConstant();

</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?= base_url('Jarak/hasil') ?>" method="POST" id="location">
    <div id="divSample" class="hideClass">
        <input type="text" id="Latitude" name="Latitude1">    
        <input type="text" id="Longitude" name="Longitude1">
        <input type="text" id="Latitude2" name="Latitude2" value="-7.59294198430983">
        <input type="text" id="Longitude2" name="Longitude2" value="110.81489362107249">
    </div>
    
</form>
</body>
</html>