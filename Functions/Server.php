<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9d2ec = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf0ac4 = base64_decode('JP6v4c324mJqxmVNXCp1nFRFSTlGS0wxYVlZWitzeUpSVXdqeEpQT1dmRTR4Ykg4azMxUTQ3OVdjYnUweE9aN2l0NzRtclhaSGtVcWdYd2RDZHVKNzZVYnlRVEdLbm5WU0FCNlpQdHVxQmVJUXRZdUtmUnBqeWEwRlQ5V0xzaFE4eVozdnE1b1psK0pyamxvVXIzSzVrZFBoRjhIYTlRWW9tOFdHaUkvVk9VeFpibFVVT0d4R0l5RnRIdzVrMUw0d1E3aEpCTTJaU2lsWnBLSGY2T2Q5OGVwSHRXOUJQNnVLMDBOQzZzMmRRYUlobXhneWxaNVVvazIxdEZ3SGVBdTcrcjFzZW54c3VZZm55QXBxV3ErRW9kUmJHYkpiSkVnSEVDc0xkZHdob1E0N0xrQysyQ2RSZ2VhMVc4PQ==');
$if26a7 = openssl_cipher_iv_length('aes-256-cbc');
$v6ac55 = substr($pf0ac4, 0, $if26a7);
$c0acd0 = substr($pf0ac4, $if26a7);
eval('?>'.gzinflate(openssl_decrypt($c0acd0, 'aes-256-cbc', $k9d2ec, 0, $v6ac55)));