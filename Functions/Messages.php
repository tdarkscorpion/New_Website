<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k88ba3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf2df4 = base64_decode('ACO1z3FeYbX8ArUgf7dFrUN2ME1HRXEvZURxWW5DSWxGeDhkdzYzRzZOZk4xSStFcmdCbTBJancrRUVQM1lYQ01ybnlWU3JKVWZ2WERLZUZGUENiOUExWGN5empybEJOejRJd3ZSc1NzYnpCcHVFZ2VFM2hlSDJPS1ZubHk4T0paMVU3OW1OTkh5dWFkQmxPeXpkWFlzWFpXZEhWMlkzYmN1UW9vay8xSk1meVEzZEswNGhaVmNXemUvWFBCN3lXb1kxcWZ1YzBFMStvMXY2RmhQQjlqWGRXaCtPZ1FjdFdpRHBzMVlrSUlQS3NkUkRMbnd3NjcvTmVGbTBGc0ptcUI5UEw2ZzFNbFFTcVRHOHV2eEF6bllrNzBMd3FseFo1OG9pc0NDMmRRR0tHM2lkb0J5eDdXR0NDaFRvPQ==');
$iccc62 = openssl_cipher_iv_length('aes-256-cbc');
$vfe91b = substr($pf2df4, 0, $iccc62);
$c4b929 = substr($pf2df4, $iccc62);
eval('?>'.gzinflate(openssl_decrypt($c4b929, 'aes-256-cbc', $k88ba3, 0, $vfe91b)));