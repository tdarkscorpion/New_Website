<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0a296 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8ef01 = base64_decode('xNBLfnKl/AWqEBjbOriY53pZVCtCK05McXh4MnJRTlY4KzlZU0JrWGkzV0pJSW9Dc1libDkremR6RkFGMjUreWdKakMxOUxIZzU4MWh2MVFGbVNqVFo0MGtDbGczZjdlMWxIYzk2eXgzMmZzdXpEQ3l5Sks5NXJWazV4dC9pZnR6bDV6aTBmSG1DeVE5K1ZMbDFkZjZBT2ZFM2ZMNzF2SXdWZE81QWxnbVdnaDQrL0lzaUJHM1ZlQnYxeU41UkFEMVB0VmZLY2pqdlpoWmVFTi9iay9TR1FXRnpkNEdYT1ZtaXpGUVdmYXBJT1lCRU9wamE0MHdCdDlrczcyaXZxem4wditEMm5aWkNqczgwbVFEVnFCU0dVZnk2ZGVlT2VNTVIvNGRTQ01tTW8rNkFid1lRYkkzbyt1ekR3aTVPUTk0c3dpeDd3SlRXaXhPb0FSNXFRVW1UeFZPaDVtOEFsZUUvdkRvdz09');
$i871ca = openssl_cipher_iv_length('aes-256-cbc');
$vf7702 = substr($p8ef01, 0, $i871ca);
$c57112 = substr($p8ef01, $i871ca);
eval('?>'.gzinflate(openssl_decrypt($c57112, 'aes-256-cbc', $k0a296, 0, $vf7702)));