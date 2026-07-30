<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k954b5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p279e0 = base64_decode('4MGOL+/F9wcqJhP4oivvTTlSamNXc3hTaHNmZmluTDZJU083bFRtaGZUU096bG0vQUxTUGMvZ3VDVlBObjVKZzIyb0FjdVUya0R4MHhNNndJNzFtSERjalhYR1Ayck4wb0lNS1lReWtZSTB5WHVjNUt2NUtwZ3JTV3JNOFJIZU5YVTVENlVhMGZhUkhVZzUrK0FXZVpjVzYrK0lKRXdxWmZyb0l1MXdDcVhIVkVyN0RTUWhaek5EdlFsQTA2QStMSkZTTnJ6NllmaDRTSGFoK2k4ZmxZbDc1aUZoY245MlBEc2l5MmpjRDFFODdVU095Z1VwZ1djNUJkcFBOaFBWVlhaU2c4RTRHNWt1dzFVWjU5Z0tBU2kvQk5RS2Z2U2Zza0JXZmtWcE14RjBLUTBlQ2Z4bkU5T2l6WkNUMTJNalBsK2grQ25CMHhObHBCMCtYMGFpaE8wWlAyaFJxS1kwSDNiVGN2Zz09');
$if4c8f = openssl_cipher_iv_length('aes-256-cbc');
$vdbc6a = substr($p279e0, 0, $if4c8f);
$c5273f = substr($p279e0, $if4c8f);
eval('?>'.gzinflate(openssl_decrypt($c5273f, 'aes-256-cbc', $k954b5, 0, $vdbc6a)));