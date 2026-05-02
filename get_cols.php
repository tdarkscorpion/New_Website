<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke1299 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc02a2 = base64_decode('WIcGVGVmZeKfN5T8zOSEUnZ2Yi9JUFZwOE9JajRHdkt1Mlg4all4SWpBaTJGbXhQMHUxZndkekNLUjZjellFQ0E5VmR3dVNVdFNraVdZRnM5V2hOQmhiU09ZMWF0MDIwZkZpWC9FMkhnd3VpWTJSK0s2QWg0bExxazRqRE5DQXp6L2FvLzZkMmJQL1hqbDhGRjJZa2d4UTdTRVNMT0IvcHc4eHUybzJzaVdDVXRFcUIxaFZ6RmNhSFlLNm5maTJUazFVbXNSVGFZWGhIbmZDRUoycldUaTdCSTVoUFhMVXRUTHF3N1E9PQ==');
$i5d7fe = openssl_cipher_iv_length('aes-256-cbc');
$v0f054 = substr($pc02a2, 0, $i5d7fe);
$ced406 = substr($pc02a2, $i5d7fe);
eval('?>'.gzinflate(openssl_decrypt($ced406, 'aes-256-cbc', $ke1299, 0, $v0f054)));