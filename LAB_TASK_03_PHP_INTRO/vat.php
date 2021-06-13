<?php
$price = 1000;
$vat = 15;

echo round($price * (($vat / 100) + 1));
?>