<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcd07d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p329c5 = base64_decode('YGwLm36hBWWw/MbqinWOuGhqUGU1Z0pYSU9TQ2lRMHZNL3lhUjhQNGtMU2dDQVRmeTBSbzZwY3k4S1MvdFZtSENacFN2V1VJL3NjYXl2MWNpUVZCOVFRaVc3NENTN3BXSmd6SU1mWTBjVW9rQnk0YmZMRlZJSjhPMmsyTi9QdnZUNm8xMXZsMmFoNlZxRnI1eWltamt2cWYrSVRsRHZTa2N1enhjN2FpSEo3eVNDbUpnWWEwTDdtU2xVeEJTVjFMQVdOV205N20vU3lFR2VPbHBxYjlvMmEvaVJUSjNZNW1mT055YlpQejBvSDZlQVp1SDhkRlJtbVhDdGZOUm9BOC85emV3Y3AySUNNNFpSNVBMeDduN2NHWG1WbDdUeHFCQW5qWjdkVzNnYnl3cDIxbHE3T0VqREExaVFJPQ==');
$i103be = openssl_cipher_iv_length('aes-256-cbc');
$v46fb5 = substr($p329c5, 0, $i103be);
$c3de0a = substr($p329c5, $i103be);
eval('?>'.gzinflate(openssl_decrypt($c3de0a, 'aes-256-cbc', $kcd07d, 0, $v46fb5)));