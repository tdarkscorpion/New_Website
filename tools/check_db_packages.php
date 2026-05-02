<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd12ab = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p02da6 = base64_decode('pBoE4GLccW5qATGJ4TyMDmV2dVRJbDg3NFYzbnN2eCtWcDdOK1hVS01ldGxqWTVZM2EwaWMweEtXM2VPS0pDdmhnbFVRWkQwelRhMGg2NlZrcVN3YkVJLzNRMDg1Y3FsdEtoa29RV00zSlNINGFFR3REY1RpbWZ2b3d2dStuclhFRDkzS1FoR1g0SmlUZEw5eG1acDBHdmdaZmpkZDBQR1F5dG5FRzI5WHFyREV5Zys0NHNHV2QyemozSE5qSSsyMnZ6M1Jsd3pSYVRhaG5xNnpLODJRYVhIVldPTVlmTUdCWkhJanc9PQ==');
$i64d58 = openssl_cipher_iv_length('aes-256-cbc');
$v8078e = substr($p02da6, 0, $i64d58);
$c6a955 = substr($p02da6, $i64d58);
eval('?>'.gzinflate(openssl_decrypt($c6a955, 'aes-256-cbc', $kd12ab, 0, $v8078e)));