<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7ca79 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p81128 = base64_decode('pkqugdWBeBKnIYPwp/isxW5wUTBTOHdUMDVGV1hwNDdPSFJCMGdhOWpDL0drZm5Jb0pOalhoN0NpeU9RY00yYVE5UjRTL3FUdlV6S1M2VVJ0cS9ISUJRbW9abHg3Uk01clRDcFBsZ2Qwdk03cittczRMZEl4eFMyRmtyTGtTQS9BOWZxSDlLRytlWFRqU1dnMmpIZklLUUd6VjByREl0Q0dzcnZEenpTV01VR1VGWHBFaXY5SDZ5U200TFI0azgzQjViSVJXWk1PNlE1c0ZTaTNuMW11TUVZTEZ6bVhEdit4L0ZYd2duTjZqSHMxTHZvVnFqbFVFQTREaHVLb2ZVZThqaGFxd0drck4xdWo3aW9uZEh1K1Q5T0ZrZlk1dE8rRnFOU01jUWVzVVVwMTY0dHY1aEtNVHBraUNNPQ==');
$i59a7d = openssl_cipher_iv_length('aes-256-cbc');
$vd23a9 = substr($p81128, 0, $i59a7d);
$c2346b = substr($p81128, $i59a7d);
eval('?>'.gzinflate(openssl_decrypt($c2346b, 'aes-256-cbc', $k7ca79, 0, $vd23a9)));