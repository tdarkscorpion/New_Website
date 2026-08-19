<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k988dc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p894b1 = base64_decode('Mlh3ddxTsA1E25gGHKjeiGpqbTdramNmdXczd3crVEJkZTQwRW9OUGgwQ1huSWtaeFdoUlFOZzJKekFBclFSU2lyK20ycWFPaGUza3VZcTJFOHN1M2Nra3NUWG5SekxtRWRsQmgzcE5yc2xXODlhSWtwM20zNDBIVDUvMDJGdWNtR3NFS0ltTGFNVmNkdURHK1FHUTdCL3NjT3FBUmVGT3V2ZXA0eVQ4UldyYTVRQjNTbnRxTTIwVUhBckduSjNoUGh2aE5TUjJjdmJNdDFZT2hyajNnVzVaT1FDZmRPVCtkbVN4OWdmb2V5V2t6MGgzRWx3ZzhUU0tSNUliWHVUZjg0MmJrTTQrTUlieHRJekxpeUpWb2pnVnNuUEZUdFozeDh6WHltVng2bjFFVGQvVCtLSUNLc1BTM2REMnB2YWc5VXRVNkMwYXMvS2phazhj');
$i70117 = openssl_cipher_iv_length('aes-256-cbc');
$vfe604 = substr($p894b1, 0, $i70117);
$c5a621 = substr($p894b1, $i70117);
eval('?>'.gzinflate(openssl_decrypt($c5a621, 'aes-256-cbc', $k988dc, 0, $vfe604)));