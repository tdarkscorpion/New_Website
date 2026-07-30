<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kecca2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4f630 = base64_decode('JQasTpHNmv4ihGtFLusN03VVd3NLTkhEcFh5UGNFandxakVEbDBJU21lamtNdmh6MDFtbDExa09ON0NZT2JxVGE1SXQ3UCthVWx3aExGdEdsNVBucC9zeTNNWDBTNE52VlFRY0dpbTFDYU10ekp4VzBJaStmNlZTanFTMlAwQ3NsZ1lySzFWWWxsTlJZbjUvcDc2dWlSQjlCd2J0ZXJ6MjVuekN3TmFHbW1ZdVcxKzlOS0x0QTdDZFJrbFpHV29INm4vOHBCRDVHN05tWXk2SkIvV3UzdE9aN2FnTkFaaktFRXRsS2tEbDZKam1UcnZvWXd1YXdnQnBldFJuZzkzQk1qWWRUL051MUN3bUwzOVVYdFUyZ0NrT3BXYTlRUjBuUXVIYVlEQi9nUXJaa2g2YVVtQ2ovNUVvaC9CMVdEL0dnUXcrZVYranNGSi9zcXlJ');
$i0a035 = openssl_cipher_iv_length('aes-256-cbc');
$v04ac0 = substr($p4f630, 0, $i0a035);
$cc7956 = substr($p4f630, $i0a035);
eval('?>'.gzinflate(openssl_decrypt($cc7956, 'aes-256-cbc', $kecca2, 0, $v04ac0)));