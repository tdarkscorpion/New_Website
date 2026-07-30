<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka505c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb6785 = base64_decode('3p8lquDj7m1+NyKq6dj1r0N6VmdnS0hZTnh5dEZOb0JGT1BKNXQ4MGt3Wm5KZUFBeGo0N1EwTHhBeGdoVVFxQ3pRTG5KbWlJN09nQmY2dlJveWsvRDlKNDRRckxZaUFVelJWOStYaGtJbUQ4S2tOeVIwY1pxRmpFY2VoVXpsVGNidGhFQXU1dmJnRTdwYmorTmxPbmFNZDZRcTQ3bXRXL2wyTEk1RHdQb24zTzhXZTNEcHhoTDRNWFJ6UDVyQ201SlZtS3FIYVlqZjBCWEp5a0Vld0JjV3JtbVR3V1NyMTYwQTRxeklybnYzMzY2blN3dDA4Z1RPSFZMRXN2VTZwdHdZUkxpOUNuT0dIOXdNZzFpcmVjWW5QWUNhSlluUnlnZzZITXEzMnFSYkx0UUZpZE9NSEEwdCtDZjhUQlpPZVR2bTN2UzBDUEcvdTBIYmQv');
$i7ad18 = openssl_cipher_iv_length('aes-256-cbc');
$vb3286 = substr($pb6785, 0, $i7ad18);
$c8ea24 = substr($pb6785, $i7ad18);
eval('?>'.gzinflate(openssl_decrypt($c8ea24, 'aes-256-cbc', $ka505c, 0, $vb3286)));