<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0668f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paf4f3 = base64_decode('QvChV1QKeW4h4ejizy65MFVYcVhZaVc0cmY5K2tyN3kwWXUvaUd6Qk1vZVE4SUtxNysyS25ySERSeE9mc1l0UGpTZU01WU56bnQyRlNQd0NWR3pROSswamIvSVJ4eFhwWnRRREhmbVc3WUZrajZSRHIrT0FubGtkcWZQb1FDUTlWdFZ4NENNL3V2RGordzRST01peFZJa01xL0ZqZFpOSysxYWV3MHptSlBxZnBaYVJYZ29hZTEzSUMyRExqNm5haFJYd1loZThqZGpCc1VlbzJrS051b1AzcWkvbXJreEZMKzBLbE05SDBiUXRxQVQrSTN3dXhlRWFqTXJVZlh4aUVKZytpanZjcVEvTUI4Smc=');
$ia2237 = openssl_cipher_iv_length('aes-256-cbc');
$v59f4b = substr($paf4f3, 0, $ia2237);
$ceebef = substr($paf4f3, $ia2237);
eval('?>'.gzinflate(openssl_decrypt($ceebef, 'aes-256-cbc', $k0668f, 0, $v59f4b)));