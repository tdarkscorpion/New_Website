<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd50cc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc234b = base64_decode('ccCAPWPUPouGYPk5zgvNsk5yNVJNV0NrR2dmWDI2alhkRGtkSEcySXVvek9xVTJmTDEzTTRwbDlqb2YzMVNObVpFamZ5ekU0YWM1WUhFS2EyODJWWlgvdm9BRFp5c1NaUER5TlFHS2p3QU5oZ1YveFhGNXJ5eUxFZFhjZGN0cjFHb2ttNE9FejQyUjdpa1dmdHRjUkRkb3JCei9ieFRNTndPb0g0bnh1K1lXZkxDTDZSdW1VLzRNVDdxVzYvQ2JUaW94enl2dzY3L3NyOGdvSUNXU1F2WkNGUmhLc1BqWFFhOUJxQ29hbmJQdHBOR0h1TURjVm5ncEFGM2llcU42UHF2Q0pzS0l0SXkwNytFYW1HSkxWckdFaG9yNGFwVHYxRmdsZFhFV0ZJN243RzNLRWVJL0ljSXVGQlc5YXZCWHIxZnNwMVFGemlCRUVEZ1VxQzE0WSsyM2crYkpMUUo0S2p2OW1sUT09');
$i38bb4 = openssl_cipher_iv_length('aes-256-cbc');
$v15016 = substr($pc234b, 0, $i38bb4);
$c5aef8 = substr($pc234b, $i38bb4);
eval('?>'.gzinflate(openssl_decrypt($c5aef8, 'aes-256-cbc', $kd50cc, 0, $v15016)));