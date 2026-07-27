<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4f9c2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfee2b = base64_decode('ht4oSLdvAFlwU9NrceQW6TVyTDhGeUpDSXJUN3BYa21SRDQ3dmZvR2w3R0U3VXZFdXAwYWh5cDBqWDI5MTY5enVUZ3BYMW9RK1M3Vm1GbHJqVU5CbUVNRjFlaTVIUEJZYjZmdEVuRHZ3RmdUMGNrMThCMjdXaGg4d3g0UGpiWitVVWcyN2tSYzdwTGNURUFUY1dSZDE4Znk5ZG0ycTFib3R1ckJvSGMya0xUU1FWcDV3NWtUTDBVR3MrVzVDMC9jVEZzMUF4TlJPK3NnRFR1bWt5dW9qbCtPV2x0Wm1ua1FGSkZNRDFkY1Vxb3ZKaEx6WG1ydzNrbE1JN1JRd1lLalFjOWhZUjFoVFdNMDFpQkRjVm9MdmtYbFFJTjRWWUQxZkJHWk5ZamRoZGFXd3gvT3hBeXgxMWh1akp0WGtVYXpoWFJkc2NVQ1h6b05iQUJxdlF5amdFZ2l1aUxyVXpwN1dhVlZ2QT09');
$i56f45 = openssl_cipher_iv_length('aes-256-cbc');
$v66ed5 = substr($pfee2b, 0, $i56f45);
$ce6b36 = substr($pfee2b, $i56f45);
eval('?>'.gzinflate(openssl_decrypt($ce6b36, 'aes-256-cbc', $k4f9c2, 0, $v66ed5)));