<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> -->
    <script src="<?= base_url("assets/js/jarak.js") ?>"></script>
    
</head>
<body>

<form action="<?= base_url('jarak/proses') ?>" method="post" id="location" name="location">
    <div id="divSample" class="hideClass">
        <input type="text" id="Latitude" name="Latitude1">    
        <input type="text" id="Longitude" name="Longitude1">
        <input type="text" id="Latitude2" name="Latitude2" value="<?= $dist[0] ?>">
        <input type="text" id="Longitude2" name="Longitude2" value="<?= $dist[1] ?>">
        <!-- <input type="submit" id="location"> -->
    
    </div>
</form>


</body>

</html>