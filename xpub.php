<?php

//replace with your BIP32 extended public key
$xpub = "xpub6CUGRUonZSQ4TWtTMmzXdrXDtypWKiKrhko4egpiMZbpiaQL2jkwSB1icqYh2cfDfVxdx4df189oLKnC5fSwqPfgyP3hooxujYzAu3fDVmz";
$url = "https://api.blockchair.com/bitcoin/dashboards/xpub/".$xpub;
$fgc = json_decode(file_get_contents($url), true);

$addrlen = count($fgc["context"]["checked"]);
$lessfifty = $addrlen - 50;

$context = $fgc["context"]["checked"][$lessfifty];
$expl = explode(": ",$context);
$next = $expl[1];

?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/qrcode.js"></script>
</head>
<body>
<center>Please Donate<br>
<div id="qrcode"></div>
  <script type="text/javascript">
  new QRCode(document.getElementById("qrcode"), "<?php echo $next; ?>");
  </script>
<br><?php echo $next;?><br>
</center>
</body>
</html>
