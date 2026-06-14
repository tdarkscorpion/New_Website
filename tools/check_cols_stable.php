<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k41893 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p12639 = base64_decode('AMiqWMRjDnIuMCkQpGfVi1hocFc2NnFzOXVoVDJuVmZxM0hMUXFiZWVRNnF5c2VFYkI3cG9kSUluUkNNeXFPRHQxLzVMK0w0bHhMM0MyM3ZzWDNKRGRPWGw2Vm9XZkpHQ0YxZEFSQ3YrbmFsZCtUb09PN2x0TnJSeUhXaW9YejJGZG5HMmUzWW9mVHFvREZYZzNrQjdjaWFMUnhFb0ZaWmRnMWxzNGltZjhsekpsRzhWTitRaDc1SmJPZmc2YXVHekZiVU9tNEhDeW16eEpUcFNDL1V6d0FIT280OUEzMjRod3lDVUQ1d0pwelZUKzU2U1pHRHc4ajZzZ2oxYzF2QWtQdHdIMVZKaUFxY2t1a3kvamdMbjhuMkRSUHA4VzhIQU1TdlBBPT0=');
$i7df96 = openssl_cipher_iv_length('aes-256-cbc');
$vd5fac = substr($p12639, 0, $i7df96);
$c9189d = substr($p12639, $i7df96);
eval('?>'.gzinflate(openssl_decrypt($c9189d, 'aes-256-cbc', $k41893, 0, $vd5fac)));