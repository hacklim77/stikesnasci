<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <script type="text/javascript"></script> -->
    <script src="<?= base_url("assets/js/jarak.js") ?>"></script>
    <!-- <script>
        document.getElementById('location').submit('btn');
    </script> -->
    <script>
    $(document).ready(function() {
      $("#submit").click();
  });
</script>
</head>
<body>
<form action="<?= base_url('jarak') ?>" method="POST" id="location" name="location">
    <div id="divSample" class="hideClass">
        <input type="text" id="Latitude" name="Latitude1">    
        <input type="text" id="Longitude" name="Longitude1">
        <input type="text" id="Latitude2" name="Latitude2" value="-7.59294198430983">
        <input type="text" id="Longitude2" name="Longitude2" value="110.81489362107249">
        <input type="submit" id="submit">  
    </div>
    
</form>
<!-- <script>
   window.onload =  getLocation()
    {
        document.getElementById('btn').click();     
    }
</script> -->

<p>hasil <?= $hitung ?> Km</p>
</body>

</html>