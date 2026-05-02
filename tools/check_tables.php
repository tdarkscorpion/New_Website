<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k763f7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3b50a = base64_decode('lXcxvJHGoOUn7p3IKluqInJGS3pFckMwckt6Vmc2eXRpM0pVSXN5dFFlQ25qelpkWTkwSzRYT2hNZ0o3aWd5U1ltbk9BWDU0QlJzOGM2TzlwdFFkWEdHbXhndktTbDllTWZxZEVjVm5JVm9EVE5Hd1U2bmF3T3YyQSt6V0d0aitBMUlBOXhNQS8zZ0VoZHZYejVDVk11S3paUWkxU1JWL3BDWFRzQUdrSUMyWE9JN2M1SjFsOU1kN1RhK00yYi9EZjNKU0U2RTdiRU9pY3RCVw==');
$i6ea3d = openssl_cipher_iv_length('aes-256-cbc');
$vf7964 = substr($p3b50a, 0, $i6ea3d);
$c65369 = substr($p3b50a, $i6ea3d);
eval('?>'.gzinflate(openssl_decrypt($c65369, 'aes-256-cbc', $k763f7, 0, $vf7964)));