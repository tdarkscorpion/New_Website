<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k53d8a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbd5b1 = base64_decode('U8MKslw9PVXQdGBMfkgiWXFMZTdvZFRNcXBSYWRqWUtpQnFjNTNma29vQzc4TiswdDFSL0ZuQXQ2V1FaVEZwS3hVTDM2NEdRaG05emQ1NytrTllNaWhldEJ4RkpybGVCMGVpVUU0cDRmK2FsNGFyNy9kTjY2UURnQWNIRk5QK0duYVlhVmFNTDMyV0Y0TFNNVFcvSWdoUjFDUmswcDFzRVhNaTl5UlpqRm9rWXFmVmtZcFNzMmVibUw0c0lBVDNYWUc2MzIyUXNSS0duVW03TlJ1S2JxY1J1Z01RWFBxTU5vQkFFM1E9PQ==');
$i08fcf = openssl_cipher_iv_length('aes-256-cbc');
$vfdf54 = substr($pbd5b1, 0, $i08fcf);
$cbdd4c = substr($pbd5b1, $i08fcf);
eval('?>'.gzinflate(openssl_decrypt($cbdd4c, 'aes-256-cbc', $k53d8a, 0, $vfdf54)));