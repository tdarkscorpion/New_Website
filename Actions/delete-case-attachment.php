<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k08764 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p942c8 = base64_decode('DuGUErgV4wXvF3WIrEVjUmp2aTlqL0hBeFlmRkNjalRJSm1OVlpJeHNud1ZVODdJOW0rQXJwUURXOGUwakp5c1RlTEc2Qk9jeUdpaTByNGpnaEJsUkFmaThwZTBTdWt1bnBjUkEwUEszdUtBdzZSMEZvLzZESDVVTkxNdVB0OFJmUGNMbUtsWFNHUEd5RC9OZnZNTHUwdU52bTI2S1hEMmZtSk5lR01sN0lXckFBbk91TE9nL1lsL1QxNVV1SzlsZldzOWFQV0FUYWFLUTgxZ1owOEs2WW45QzN2N0RLOFFyWUNFVlBJcUVkSDlEa1BxTG9yakFJY1N4UnlrK2dtbEZtS2pobUFJa0d1azlUZTJZWUpOM0d5S0ZVQVd3QUtnR0MwSFFkL0NPUk95RmZuQ3N1Nis2dGZ2aDlHS1VrZXQwcENRZmlHdHducllpanF1');
$iad8e9 = openssl_cipher_iv_length('aes-256-cbc');
$v1daf3 = substr($p942c8, 0, $iad8e9);
$c8a508 = substr($p942c8, $iad8e9);
eval('?>'.gzinflate(openssl_decrypt($c8a508, 'aes-256-cbc', $k08764, 0, $v1daf3)));