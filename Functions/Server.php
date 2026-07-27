<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k062f5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb3fc5 = base64_decode('igIrUwaYB4Evk+Qcol/CXmt6VE16VTFyai9TNTVXMWxYMjRTYXMrWGFGUUJwdHJwL2FadDZKZFBUcGhpdHRGSWJvQTZWV1NrelZkNDlYaGh2Y3JIRWxpVXYxUGxyaWd6OGsvTWtpdzFySVBjVVFENFhGaGZGSW11Ung3OGtSL0txb1laczlTREpRUjdGNnhxNjY5SFZ4NDB0UjBuN2JwQ1VsOEpKdkgrcWlqbUM2czBUQnQwN3BlY3JOSUVueENuK3g0amxCbFpmZ2pOMzZyQ1BaVG5PWWVuaDk0cnZ5cU9BT3FZTVZDQjY4WlROT3dhQXo0aExqcXJLWUE0ZUpNUXZHQmtueWtnTzIrTHFIa0U0c09XQlZBdEU5R1NrVEF2RURYQi8vMWt4bXJTUEFEU3RJRnJUVjVTNlRzPQ==');
$id7ab2 = openssl_cipher_iv_length('aes-256-cbc');
$v2e3b7 = substr($pb3fc5, 0, $id7ab2);
$c0c207 = substr($pb3fc5, $id7ab2);
eval('?>'.gzinflate(openssl_decrypt($c0c207, 'aes-256-cbc', $k062f5, 0, $v2e3b7)));