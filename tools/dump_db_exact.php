<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k06182 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4c1c6 = base64_decode('qbW7JC2v9VYNjyU3hrhOd3Bob3dXczRmelh6NjVvQ0pxTGRPMEhVK3pENHJaZXdYQmp1bDdkS2RvRkdtQUJHYWhDUGdvSWs3UU1IRzcwUkRSbWczTm5odHk4aitSQWR0VlUxMmQwbitiYklpKy9TZisxanoxeW1zVmtDTHg1L1JQMXB0NnVIUDYrQjFWdFRpN0p3MUNmTzQ1TzNpUm9YMVdKM3NMUWJ2Zy9Xd3BXamR3b0FVTEpIUWgxZ1RXTUtTcXpOSmZsanlNSXNsTUhTaVg0YnRHRk1rOWRDM2czNDgvRjY1bExXS1B5eWJiN1QyN0YvR0h2Vnd0amdnc0ExS0tvTk9hbWtnL041eHMyWWM2NEJWMmFjb0k5ZXhQenhkWFNCL2ZCbTN5a3dNU3lnbXo1bzVGQlhQZUw0PQ==');
$icb2fc = openssl_cipher_iv_length('aes-256-cbc');
$v91a83 = substr($p4c1c6, 0, $icb2fc);
$c112b3 = substr($p4c1c6, $icb2fc);
eval('?>'.gzinflate(openssl_decrypt($c112b3, 'aes-256-cbc', $k06182, 0, $v91a83)));