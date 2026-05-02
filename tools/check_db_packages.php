<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8be4f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1b8b3 = base64_decode('mrhspYOvVILneYnyPbsYUnBmWEpERG9wRTlPYys1MlIwRnJPc3NhMXBvU2xqTWJEa0h1MXQyVTNQYzRWZXhtY3FzQ280aXpIdmoyenhVRlZWK3dRVVR5YmJNY0JHbjA4WHhEVEgrWDYrdHRNSHFXenR5TW9UN1p6dVBJOTk4QWs5TUQrUEhGNFhqdGNVS00zMkRXREV6VXV4VUx1WllDVmNuSWdLb0EvczZoSUd0RzVQUnpJRXNxbGVMRW5ITzI0S0c2akRFem8wN1FYUUVjWHUwajFSTnJBN3pZNG1jYis5cWFQR0E9PQ==');
$idcfd8 = openssl_cipher_iv_length('aes-256-cbc');
$v38a7e = substr($p1b8b3, 0, $idcfd8);
$cdd294 = substr($p1b8b3, $idcfd8);
eval('?>'.gzinflate(openssl_decrypt($cdd294, 'aes-256-cbc', $k8be4f, 0, $v38a7e)));