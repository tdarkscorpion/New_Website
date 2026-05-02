<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb5d8e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p92ee4 = base64_decode('56yMo1WNRh88z/kLYGnbbWY4Ry9RZzFMYXlVRkhRbmZNUEQzWU5lcUFPbCtmYnhUTEdodWV5WGR3NHFpcG9iRWhpYkxneUkvZVIyVlZvK0V1MHV5K2hGcUFYYTVyRER5aHBFdHNTblYxdFhIc1AzczBKajhwU1NmMHJocEpVckxaSXBZYTNQRzdqSldHRFZUTmNNc2V5b0hyOThBR2dYOEQ4OVE5a2NHOGJZd1JSTkxQMFRsWW85QkJsTTZ5TG0xdHVpOHhORDFtOTZXUDcxRGVRdGR3Um1uSHgvQXRPaWFMRjN5bndxMFlvbWEwdWltT1N2VUE5d1BWd3lrNElQSEdxK1JVT2pLR2hrZlBQKzNoYWdJV2RLck1NTGJjclJSV1NFTmRwMURYMjVOVWF6bGNOemNDd0l6YUVsTTlvWDUydXBhRmNFZ01EUnBPRnQx');
$icc3e1 = openssl_cipher_iv_length('aes-256-cbc');
$v3c863 = substr($p92ee4, 0, $icc3e1);
$cb1f01 = substr($p92ee4, $icc3e1);
eval('?>'.gzinflate(openssl_decrypt($cb1f01, 'aes-256-cbc', $kb5d8e, 0, $v3c863)));