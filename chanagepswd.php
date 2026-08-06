<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3bc63 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc310d = base64_decode('sZgpwbc5JdQysQfDYG3kUWZEM3BJYWRkSXIvRm8raUdRY1FWbm1sRnFBaXdhdjJhbmVRMEJPSFhRTlJ3SUFYd2I0RHVmNHVDaE05NHhQV2VhMGR3VUU3dlRwcDhoeTZ1NmljS2ZVMmhQajkxb0I2cVRaVDVRYW5mWjBLby9OUkEvUkxaeUZEMEFzME8vdzlSajR3dWVubUQ1VjI0ZTg1cHhkcGh3TVlkWi8rQWhoV3RUdEgzS1ErZHM1cjNKYmJ1eVN4THZSV3FhWDlsakZIV2FLRS95Yitqa1JEcE8wNkpXWndhUjRGeXhmYTQwUUdldmVpRVdwbzdmQmZLUXRoTE9iaFVNSDhQUW5HbC9sLzBZa0JYdktELzEvMWpvYi85Ri9LT0dKajQza0tSQmNMMzdleW4vMFNGbHhNMGY0SWVIeklCbU50WlI0Wm1vUTBQdXRpZEtXZzhjb28yMmFNeUZ1SmFCZz09');
$i8ce22 = openssl_cipher_iv_length('aes-256-cbc');
$v30efa = substr($pc310d, 0, $i8ce22);
$c8c902 = substr($pc310d, $i8ce22);
eval('?>'.gzinflate(openssl_decrypt($c8c902, 'aes-256-cbc', $k3bc63, 0, $v30efa)));