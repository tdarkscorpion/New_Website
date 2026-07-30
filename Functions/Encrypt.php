<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9cbec = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p662b0 = base64_decode('wmwgf+sPeGwUVcq8iAUFlFJBOHh0bjRrMGEvVzJxT1pIK3pEdFVQLzBFdjRmcHlaME15QVN3ZXBINzhNUW5YaUhZNlU3cWFtY05KbnI1UlNEdmJJWFNKb3BvMmplZ0NubUZSZFowOXVSSkREd1VLUnV5QkVwRHBrTzdBN1dwYU96b21IL0RGbFd0aUhiZS9XUFZ2T0xTM05xcVozL1U2Uys0NDR5UjBkUldkcjE5dEhCL0xUQVB1WEhqNmJrODdKeXVHUWgzZ1lickl4U2U1MmdaakNRUCt0S3BjVElicE1NY3FiZDRxbDIwUncvUVdhdlFMaFlIZHpMM1lwajN2Q2J4RzluQjFuYzA1VDVGdjZSUWRPRzVjazJSZTM5Mm9RVDFnUXVBcGgwN1dtM0tMbGRkaWhmSUUwWFBrWDc4ajdNMXlQMHo3cXlhZ2hKTGRzV1hVcUlhWkpHdndGSkpTWGwrMzJSakVva053K1lCMTVRZ3R6dWhML1hsMk1NVGNqbytuT1Rkbk1lL1RQb2FpaFdHQlVlckRraEZIWFh0cTF4emNyanluNExQQno4dTBBWDdlb3hiL2ROdzNxODBPNnJ2VzhQSWlRMkxXRGpqT3g=');
$i679e5 = openssl_cipher_iv_length('aes-256-cbc');
$va8fa8 = substr($p662b0, 0, $i679e5);
$c47337 = substr($p662b0, $i679e5);
eval('?>'.gzinflate(openssl_decrypt($c47337, 'aes-256-cbc', $k9cbec, 0, $va8fa8)));