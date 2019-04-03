<!DOCTYPE html>
<html>
<head>
<style>
img {
  border: 1px solid #ddd;
  border-radius: 4px;

}
body {
    background-color: #000000;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 60px;
  width: 50%;
}

        * {
            margin: 0;
            padding: 0;
        }
        .imgbox {
            display: grid;
            height: 100%;
        }
        .center-fit {
            max-width: 100%;
            max-height: 100vh;
            margin: auto;

</style>

</head>
<body>
<font color="#ff0000">NOAA15</font>
<?php
ini_set("allow_url_fopen", 1);
$jsonx = file_get_contents('https://network.satnogs.org/api/observations/?end=&ground_station=6&id=&satellite__norad_cat_id=25338&start=&transmitter=&vetted_status=good&vetted_user=');
$json = json_decode($jsonx, true);
foreach($json as $item) {
    $wtfl = $item['waterfall'];
    $dmd = $item['demoddata'][0]['payload_demod'];

    ?>
<div class="imgbox">
<!--<img src="<?= $wtfl ?>" class="center-fit"></img>-->
<img src="<?= $dmd ?>" class="center-fit"></img>
</div>
    <?php
    break;
}

?>
</body>
</html>
