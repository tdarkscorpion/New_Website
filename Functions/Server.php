<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k758b4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3ea46 = base64_decode('bujobH+nARwJCY/axEX1/GNBWDl3elBNWWRKM3IrOWNWVEdtT1VTWm1aOEtYS0VHWEREK0NXSkh0eWxMdzJ4azF5SEV0bFRHVlJnbHZhcmlja2tabk5GMmp4TGdpUmJtc2oxTGpXSTZ4emZaYk9CSHlvMFJNY2xpVy9Uam1RR21paGdkeUtsNi8vNHZjWXp4MFFLbmloZStOWHdnNTlmVzFnRW9rUWZ6RG11aHp3UmY5MEN2MXlRRUNOQlAvYUtuVTVMVzZ5ajNXNWxmNW9HV1NuQ3k5WGdFeDFyOHo4UWs0TnVXbGtpMUUySFoxZDlwUFVFbjFVSEY2WTQycVU1Q1lDSUdoRndiRHh6RWRmaUNNa0ZkOWRkOGR4VVRzMXdKOUtyTkRQNWlLam5ScXVrRTlDZFJCeVJjdkRRPQ==');
$i10c40 = openssl_cipher_iv_length('aes-256-cbc');
$ve0dad = substr($p3ea46, 0, $i10c40);
$cd50c4 = substr($p3ea46, $i10c40);
eval('?>'.gzinflate(openssl_decrypt($cd50c4, 'aes-256-cbc', $k758b4, 0, $ve0dad)));