<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k18288 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd14f0 = base64_decode('IISGShGSO2lzclODIw88rlY4dDdCY1ZpcGd5OTlObSttV1R5eU95RDZyT2hwM0pSMHZtZTlVbHRsbGFrU2U1NnBoWjJoRFhMNXM0RDVxNGxYVUdJMUJRRmpiREUwR3ZxaXFYSlpPL3VXaCtnQnNoYWZ2NTlyOWltS2NTSjUwb2NQOHUzRXZyZGxGamdtemkvMGp2QS95ckd3eGxkZHIyeUdyTWo4OVBUUlhrZmNveGJSYkg4ZjFJWTA5UHYveU5Uc0krTWcxcityMHVOSmhxY3E1NnpYRDFYSTFUbGlwWEpoVGJYUG9xN3IyVWdQNmE2RmFCRjVJTjFsa2ZOR1I3aHlpR3lRY2lVdFpKZlRXaUlmVy9tRDNpellGdkRvWFI1Q2hYLzkvV2o3TmkrWUJKdXBhZjcwZ2xUVFNhRWdpc1luQ2NYdm9CUnhFSzhiRTYxWTZ0azFhckFsOUFBeTBkNzRNTnFEZz09');
$ife0ab = openssl_cipher_iv_length('aes-256-cbc');
$vf4453 = substr($pd14f0, 0, $ife0ab);
$c81fc4 = substr($pd14f0, $ife0ab);
eval('?>'.gzinflate(openssl_decrypt($c81fc4, 'aes-256-cbc', $k18288, 0, $vf4453)));