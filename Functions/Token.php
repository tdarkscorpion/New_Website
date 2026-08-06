<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6ab3d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p975f5 = base64_decode('zxy27Epfc3XvrdrlhoAj60R1Q0w5ZUxYbTh6MHFGai9ITUZpcVV2VDhZY3UrL0l0akZPeDhGSUxxK1kyUGsrWGp2R2dnTWNXOVdBUzBHbjNUTHJVa1pCNGx0SGVORCt4eVpVZVZ3ckpiNWNtKzBEa28xT25kRDhOWTJVNTYxOU56YXR6QnBmZkJQVnQvakI5MGVyUHlxTVBtNTJacXFjakUrYnloU1ZZOUY0eDdzOEFIaWNsd3RXV0Q3VXR3dXd6NEpmWWg4WllkQlZUYkR2bDN6cXF6aDJhaVRtQnBOMHo5T09hN1A3ZVdHZFJHWFdOOWhvbndIY1dKczZveUVNWXVlRkdad25GdDdkcVUyTG4=');
$idaf5a = openssl_cipher_iv_length('aes-256-cbc');
$vce5be = substr($p975f5, 0, $idaf5a);
$ce345e = substr($p975f5, $idaf5a);
eval('?>'.gzinflate(openssl_decrypt($ce345e, 'aes-256-cbc', $k6ab3d, 0, $vce5be)));