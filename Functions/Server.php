<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k96950 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf9bbe = base64_decode('9XvuCqUN0TYY/JGXoC5ZVmR6NHpXWUkxUENVTDIyQzBrNUpEZWlUcC85aUxEVFpLbk1iUEkvOEdTOEdzdzFuUVpvMnIyaWlCWEdXVkRFdDhxM1hYUmI1ejdPcWhZYzlteEdpY0Y5SXJ3bUk0ZlhzbUh5bzZJdDQ3VGpyZ0tCalVtakMxSUk5Q1NKbnhsYS9QLzg4bWJCNjdQNExRRFErTGZMbCtBSjQrTkY1WGQyeE1qaDZWTUFjRkRJcVhERUV6SlB3OUlZcE9GUU9xT2ZzSnJvV0FURVl2OHVqVnd2V2RreStVbmM2eFZIb1Z3cGsxdGExU0kxRGd0TVdZUElOZ1p1Vm1RenI4NCsxMGYxUDcrakUrMmdoWDJjNTFCNXdBZGhLV2RjdUlncEJyRTVWY3dQcUlHcFFRMkVFPQ==');
$i3fe91 = openssl_cipher_iv_length('aes-256-cbc');
$v33682 = substr($pf9bbe, 0, $i3fe91);
$c817e6 = substr($pf9bbe, $i3fe91);
eval('?>'.gzinflate(openssl_decrypt($c817e6, 'aes-256-cbc', $k96950, 0, $v33682)));