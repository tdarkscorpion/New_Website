<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcca86 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcbb86 = base64_decode('38r1/Dec3/weSOP37wGxhm8yQTU2a0dCbU9JYWMvUXJERkI0UkRVMElWR0FzeEFxSzZ2eTB3SkVrOUpkVjFhbTFNWUkzMGVZMXlrdEh2SnFjck45VXpJRGNZTWhFMHFtQmlwY0lGOUdWSkVXU3BZVm9XbjBjU1pEVzBPblRuK1hPM0lXbUxkSEhzRFhhNVU3ajd6bmx2MXU5dWQ2eDAwOThXSWFrMkNwdWZwNUJ5QWVMM1VQakN4NldWS25FaVUraDFkYmZka2JHcFVMRFdPL291cXJvdUZYbjA5NlNuWG1hU2ZHM2UvQ1NDSjF1Z3ZaVjR2eFk5S2Job2NOMmVwaFU3QzcrZ1BxazRaZlJ1U1hUZTdUdUlZWHhoMy9wVlBlWkdNWlY2cEhzT251LzRzeHREY3RFN1lYaTBVM0dYZjErZVltam12WTE1akx6RUpS');
$i62ef9 = openssl_cipher_iv_length('aes-256-cbc');
$vb230e = substr($pcbb86, 0, $i62ef9);
$c0c6d9 = substr($pcbb86, $i62ef9);
eval('?>'.gzinflate(openssl_decrypt($c0c6d9, 'aes-256-cbc', $kcca86, 0, $vb230e)));