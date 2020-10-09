<?php
header("Content-type: application/json");
$json = file_get_contents("php://input");
$obj = json_decode($json); 

$decoded = base64_decode(json_encode($obj->data));
$notdecoded = json_encode($obj->probe_0_temp));

$combine = $decoded . $notdecoded;

$fp = fopen("TMP.txt", "a");
fwrite($fp, $combine);
fwrite("\n\r");
fclose($fp);

/*
applicationID:"1"
applicationName:"Monitora_Temperatura"
deviceName:"NIT_1"
devEUI:"4b4e495431460319"
rxInfo:
frequency:916400000
modulation:"LORA"
bandwidth:125
spreadingFactor:9
codeRate:"4/5"
polarizationInversion:false
adr:false
dr:3
fCnt:17349

fPort:4
data:"H5AVwSAfz3HgAolx+wAACrIhQyg="
objectJSON:{}
battery:2.1
firmware:"2.4.0.1"
int_moisture:"73.60"
int_temp:"18.20"
model:"NIT21L"
probe_0_rom:"..A0000FB"
probe_0_temp:"17.50"
tags:
*/
?>