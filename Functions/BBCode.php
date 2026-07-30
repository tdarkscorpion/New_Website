<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfefcc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdb736 = base64_decode('k0rpi0GF9z83NgSqiRskH0NBMVhjYmxQZWVwNUQ1c1A3T0Z0YWdjL3RIMlhwRTBhNG81WG1aSGtJYmFvbzd2bUhIUnJUOFFZN1Y4THkxU2UwM1dGSXl5MVpEWHdmQXhSTEdVYzUxVFNLdllxUTdlK3Z0RG5haU9tVkNGWEFUZzhmaEpzd0NZMWx5T3RoeCsxd2JRYlBnWGhnUTNzaDNnV1JZTE1EZlFIaGZqWDJaMEozMU1Ba0tzUEUzbytHbG11a25iRm05cEJwUTJzRmcwQUpXNmZLaXh4N0Exd3JtVDV1WVpaNHBkOER5dXp6NW92SHJIdllPZkJCcUNTWFVMVmpvdWd3ams3SGEyZ3hNTmxTNmxkMzhXZytHd2NHcTF6MUpmcXQ4M0M3RXZjZ1NnalgxWDNqRThXTVNpbzB4ZFBSZ091bHFkQzhTZ01KZEND');
$i1fe07 = openssl_cipher_iv_length('aes-256-cbc');
$v19e59 = substr($pdb736, 0, $i1fe07);
$c283d2 = substr($pdb736, $i1fe07);
eval('?>'.gzinflate(openssl_decrypt($c283d2, 'aes-256-cbc', $kfefcc, 0, $v19e59)));