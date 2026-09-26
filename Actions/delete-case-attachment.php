<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k59aa5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p02536 = base64_decode('nctFVNOc1cy5LuXoCHKBAjM2cUY0M2ozdkltbWdVNVBUdWt6dGh1TFhXV2Vma0hpZmFqdkZFZkdDb09QRWMvdU5jTHVFWGJZaDBNWk5RYmFNakhYUFdOVGw4V2g1cldKa2I5RmpramNzb3Naa3V4WFNOOHlDampHKzhVQlpZRDFDVmNSejh4RjI4VEJBVHBCbkVsRlpTb1lCVERJV01sRlM1QVdYSkdrZWlUSDhKZ1hoRXE1aVo0eFI2TS9pN2NBVHFLd1ovTmQyVTNtZlNWcEFGakp5bStMZWhDRTllWUlBYUlTZ1JEbEozeUErL0NIb3VrbDNFK2xZOEZYYmdLdm9mZTdpbHNHTk1mY0NTTjNFemVHK3BJT3hyQXlUL1ZoMWdKdzNIOUc5MStmK0htUmpnUVRuSWdIRVdlblQxV05jdjhaODVsMWpTSktTVXBQ');
$if3c4a = openssl_cipher_iv_length('aes-256-cbc');
$vbf688 = substr($p02536, 0, $if3c4a);
$c6a425 = substr($p02536, $if3c4a);
eval('?>'.gzinflate(openssl_decrypt($c6a425, 'aes-256-cbc', $k59aa5, 0, $vbf688)));