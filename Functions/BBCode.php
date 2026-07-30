<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k119ca = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3da4a = base64_decode('AIi8RV1fOOYyO9L8+8hoXitaT05meG5YbHRnamx6K0JlWFVSNXN2eER6UkV3UGhCMGZFVFBiT1ZYYmFDLzBYMXgwNW91TEkxZmNadHNLbVdXYUJMY2lrOWwybVErNGpWUk9lcDNrSWk1dXNVcTZza3FPUWRRVXY4RDZJVUhnNzB1blhpR0xmT0dWL0tYakpweWV3OUROTFgxQ09qcElnbUNtZ0gvNXZxY1NNUU9QVlEwMWpndmNBeTAzMUhiUjdweEMxZ0k5cWpUa1pIRzJlS2V6UVhDS1ZScFZ5cU4vRk5pQ2k4OCt3cCtrZ082VVMyK21PaVM5MWJKMG9SN1h1S3hCcDZGa2Q5MGlNL2xBMjJQd2xTaFB5TnZnamVYdWlRRk1NYXk2aGxROW5qYkt0N2Y5K3V0SDFuaFZ0RFo1UW1yZ2l1SldRcHZwckNMQVJV');
$i77f00 = openssl_cipher_iv_length('aes-256-cbc');
$v3afa0 = substr($p3da4a, 0, $i77f00);
$c576de = substr($p3da4a, $i77f00);
eval('?>'.gzinflate(openssl_decrypt($c576de, 'aes-256-cbc', $k119ca, 0, $v3afa0)));