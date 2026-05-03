<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kae9af = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p71a8e = base64_decode('+zJdu+r60AcxT8yChwX2i1ErVjV0SGdRbHdRYkRaV3FHcE1yU2FqMFJjUGxaM0FlNEhtNkNMaFBJd1M0d2RoaG5wUjJobE5lQTNvd3d1Y1M1S1NsSXBRSHNxUnpVR1pWb2ovbTBrQkozUHN1Sml6SjBhc3prUHJBY1I3ZnBPN3JUK3V1bDVlV0FtN25uQ1FvRTdaa2JJWWc2UVI1MVpWMUVJUkZ3NVZ2SDNjSVFwUHF3elRSbzhqd1NSa04wenFsTjZQOUNvSUtTZUJEOGR3VHNVOXFjeUt0NjkrSDlWcVU4L1p2RWc9PQ==');
$i99676 = openssl_cipher_iv_length('aes-256-cbc');
$v388ae = substr($p71a8e, 0, $i99676);
$c75414 = substr($p71a8e, $i99676);
eval('?>'.gzinflate(openssl_decrypt($c75414, 'aes-256-cbc', $kae9af, 0, $v388ae)));