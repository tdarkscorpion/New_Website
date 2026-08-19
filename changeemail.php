<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6e3ab = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbc3de = base64_decode('K8bIyIWJ99epDgdr6b5h/1NGcHNrLzBhMzdSQUFEK2w4dXk2MWI0c0hId3VEd21JblB5Y3Y0bVdVUE9zV3dsSzZCNGhaY2FIaURrRXJFS1dhRXZWaVlTdEtMTjRrSFVJUU01UEF5T3dCbngzSkxOaUZMMjNyNVM0dlVoTWovNy9iTFFnR2NEMnhnMkVLbHluYS9zVU5hc2ZvcEdaYVRYNk0yKzhVSGRWRnVQbC9tZVFMNThLSzh6VTBGOGV2TVNoQURHV3dMRW9kQkhxd2dMYmFYWVBoRGlGUlg1aFBuU01INGtXSFNOUi91endDdjVtajdVMUMvZzM0aG1oMzBDaWVUY0dmNThmYzF5SGtIMUxacjd3NkRSV0dacHlsY21HTkR0TnhjUU15YjRGYW9nUFFJMFNiaVpmMW85dzIwdkVoU0ZJbmRxU2IvMDVXaTIrTHFaeis1My9EV3hEV1ZHU1dBTHlTUT09');
$if5fa0 = openssl_cipher_iv_length('aes-256-cbc');
$ve7eb3 = substr($pbc3de, 0, $if5fa0);
$cf90e8 = substr($pbc3de, $if5fa0);
eval('?>'.gzinflate(openssl_decrypt($cf90e8, 'aes-256-cbc', $k6e3ab, 0, $ve7eb3)));