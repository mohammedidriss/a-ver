<?php	
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<H1>Version A</H1>
<img src="a-abtesting.png">
<div>
<?php 
 echo "My Demo Pod IP is : ".$_SERVER['SERVER_ADDR'] ;
 ?>
</div>
<div>
<?php 
 echo "Version 1";
 ?>
</div>

