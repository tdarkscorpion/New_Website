<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2c368 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9518c = base64_decode('Ng7womHhl4uLxojbRCBk/CtrTGZvN1REWW0yd2tGSDRsek5rNHBaWjI2OTFMVy9LVHlGZDN3UG9iVXlIVktnYzFyTUcxa2h5VkJvTFlhRlMrd09yRkZkc1FmWDBPdjlUT2cvblhYWEp4SjE2a3ZyYWY4THpOUEluOGJ0ZE8rVmhtN1J6ckV4NFZUR3BjUDVNUTVFeVNGaTlJdGpURTZGMnFtMVl4RE5PMmFwbzRSLzNib3hzZTZjbHVzTmh6MlNOMkpERlQ1UksyTDZOSjkwbnRpRDNmUDJid3hVaUFGUW1xYTg3eUl0V01PWUg2bkJMUXhLN3A0SHY4NHZlc29Sdm1Kb2M5OUYwbjR5aXk3U090T0RyaTNjaDMyU1JwUTlwM3JRNzVJNVRRdVdWeUg2TXNXSVpGcnZkSy9DVFZueXhWZWlpK1hPNXVEa0N5ZVdW');
$icdd6a = openssl_cipher_iv_length('aes-256-cbc');
$vb4e04 = substr($p9518c, 0, $icdd6a);
$c42bd3 = substr($p9518c, $icdd6a);
eval('?>'.gzinflate(openssl_decrypt($c42bd3, 'aes-256-cbc', $k2c368, 0, $vb4e04)));