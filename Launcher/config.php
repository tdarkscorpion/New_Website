<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keef40 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p935a6 = base64_decode('qDUmZ3hyTHuxQaHkriJFLFRacEJXMkczRDNmUFlJbUphWWV3bG1xSDZtdGlxS0NDMXdsdlJYcEJ0TnFmemxkN2lqdVZNZmhYOTdLa3NMZ3BpbmVMVmdOVXR1MDJVUmkxU3A5bUhwcmxJdTcvelp1UzUxa2RhT1Q2Z0ZHQmtxalFTYkgyTE1IeGNuM21qMzRGM0hiQTRvUytNWS9Qak96ZlJURzkvbkNBOVdYL293aWRhcjVQTEpMQUFCSzY0T1FGVGlVeERjTDUwclJUcjVnNHZtSVdNYm13OERwWUNlWTQzN0RCMDJDSlcxVHFnWEZRbVh3czBoQmlrZHhkbDZqR2NNU0RsUE4xb1k2em5FZGM3SWdjYUhUeTBrYm9uUGhkUVFMSjBOMEZYZmIycVJhY0NNVUdsZHhYUUlnPQ==');
$ibb8b8 = openssl_cipher_iv_length('aes-256-cbc');
$vd373b = substr($p935a6, 0, $ibb8b8);
$c831ca = substr($p935a6, $ibb8b8);
eval('?>'.gzinflate(openssl_decrypt($c831ca, 'aes-256-cbc', $keef40, 0, $vd373b)));