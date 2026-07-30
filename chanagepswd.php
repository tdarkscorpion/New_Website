<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4d9ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p109dc = base64_decode('Ai9O/V3myQwk9irGPt2o5UNoRmErcFpNMHMyeExVck9kcUEzd3lIaDdsMzRKSEtsMU5vVFJWWkdCWFZYYTFsbjR3d1FKVEZnUGZQenA0RGV2bXV2UlZpTTlnVHJiTVlPeW9LTWx6WEdqMjlaSEo4QmlDenhYK2hGN2x1U0xQaG56b3pVZ0lTMGJoSmVDR3EzQjIxSWx2Ty9pdVhKNjM0cnoydFIrbk9XZ215Y0JSSklpdXhTMXczMi9hemVuQnArRWJRWHdqR1MzZFBuWmlUVGRPL3o0MWx1a016VTBsY3RJaWQyWlcrbDRtUXNVdFgrR0hHK2VUU2E3U25IdHcycWx5azN5SmZTRzY1aVRpUHJpdjVkYnNKOTJYR3JzVEN6TnlaeFpEREVQZXFZYjgwNTVnT0lCUzZORHcxYlJ0S3l5ZmxyNFFKTWpzY3dmY29qZERjTGd3Mkp1dStXWnRPV0ZsbkIzUT09');
$i625bb = openssl_cipher_iv_length('aes-256-cbc');
$vdb5ee = substr($p109dc, 0, $i625bb);
$c1dcf5 = substr($p109dc, $i625bb);
eval('?>'.gzinflate(openssl_decrypt($c1dcf5, 'aes-256-cbc', $k4d9ae, 0, $vdb5ee)));