<?php
$prevmods = array("b" => "Blowoff Valve", "d" => "Yellow fog lights", "a" => "Mishimoto Performance Radiator", "h" => "Aftermarket Exhaust", "g" => "Pioneer Radio", "f" => "2 10 inch Kicker Competition Subwoofers", "e" => "HID Headlights", "i" => "Rebadged to the new Genesis logo", "k" => "Wrapped the roof carbon fiber", "j" => "20 inch NICHE rims", "c" => "Bilstien Racing Suspension");
ksort($prevmods);
foreach ($prevmods as $key => $val){
  echo "$val\n";
}

$previmods = array("Blowoff Valve", "Yellow fog lights", "Mishimoto Performance Radiator", "Aftermarket Exhaust", "Pioneer Radio", "2 10 inch Kicker Competition Subwoofers", "HID Headlights", "Rebadged to the new Genesis logo", "Wrapped the roof carbon fiber", "20 inch NICHE rims", "Bilstien Racing Suspension");
list($a[0], $a[1], $a[2], $a[3], $a[4], $a[5], $a[6], $a[7], $a[8], $a[9], $a[10]) = $previmods;
var_dump($a);
?>
