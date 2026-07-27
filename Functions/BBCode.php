<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7a2ac = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paf7c4 = base64_decode('j4MsI8Jq0jrDWbdb5CeuBXlTSjhrZTN6ajhYN1V1MWw4VEZCcWI5SytnWUNjdmxtK1FBaFJPdkt0TU5od2Q3cjBIVDJWdUVLV3BiRzhnNk01YlVkUVNTS0JnNVFkMExLaWhnZ0FET2NMc2lZbm5uL3M4TnBYTnVtckI3MDZuVi8wOUw5c2xGNVlCOXhlNGJHWUVRUjBzNDlrTmk3ajc3UWdwN2NKRW1Wd1R2SmpuTjNIc0oyVUd0dkZEYU8zS2hzRHJPdG1jQWhzc2cremNvcjRObjhCc2ZoRFdreWQzRzkvNjN6V3dIeGlZU0p3Y1NESE53YnJzYVJ2bnNMbS9yTmU2T3NmWEx5UXFuZ0lsak5tMm5QVWJHS0tIQVBDTU12VVlMQXhWS0hMc25HMGlVd29TZFdabzBVY0Z2NHNNOE1PZHVqY0VWVHdabTVIMGRO');
$if0836 = openssl_cipher_iv_length('aes-256-cbc');
$v06100 = substr($paf7c4, 0, $if0836);
$c6dfa4 = substr($paf7c4, $if0836);
eval('?>'.gzinflate(openssl_decrypt($c6dfa4, 'aes-256-cbc', $k7a2ac, 0, $v06100)));