<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k65396 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p36baa = base64_decode('vwP+n/SMzDvDuwMv/pnZ8nlnMDN5bnN5MUkxMG92RFFDQ3M2dVlsdnZqSUlQTWJvQm5BN3UreUduQ0sya3dHOHlZTkdoQ094TGFUbk5ybGFnNDVQdlg3SEhtQk9pU0k5SWF2NXlJODBnZUNQcHNKNTRCajVwdWQ4NUtYSnllNGM1Tzd0UDhtN3U1eEM3SDN2Q1ZkZWEyaWZ2WllvOWtBbnRjTEhmUjJWblVIRFR2Rkc3OHl6aUc3MVZzSXRycHAra3g0UlcwLzd6OC9WMUc0c2J1TXRZV3M2bmtoSE8waE5pQmhnQnBlK1cvMGViT2FHR21pNFMzdHlFcDdCY2I5VVFqL0Uwdmk4aGdzSnZrYTB4NzdOb1BtZ01JT1puS3ZPbFJadlE0aUhFeWRUbEczQWlGYlZ3Umt6VGFGRElmSXQzcDgyRytqQjRFcHhud04v');
$i8f3dd = openssl_cipher_iv_length('aes-256-cbc');
$vf8684 = substr($p36baa, 0, $i8f3dd);
$c149b7 = substr($p36baa, $i8f3dd);
eval('?>'.gzinflate(openssl_decrypt($c149b7, 'aes-256-cbc', $k65396, 0, $vf8684)));