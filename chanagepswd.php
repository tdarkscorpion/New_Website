<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2f3e4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbb2df = base64_decode('T2B1ryHFmrPxq4x/yxvi+TdxYWFVeDkweHRaS1E5akpzN1Q1ZzFyVDZsSGxXSDRGUGJ6a2pseG8vUmpTYUlNVlErWmdXV0IrdlJsTENzYyt6UFFDNy9QbnZNaS9mTUJMd3lOcXhtRWQ0dEtXZDVBY0NiNk9uNHpJQUdsME50dHBCYVc0M3Jud1VnWUJlWkdIaW14TDg1dmhGakp3R3ZSUnhwZUdjMUxobmI4cHRoTGxUR1p4eFFUODVpSm9TcW5zb3ovYm4vWlZPMnpadk1XWTlNRlFpNmU3WkNPY2thWmNBb3VDN3pveGNESUFWamFudVl1N2hLNEk4K1kvRzYweG9iSmpEbFEvWU5GZTNMd0phTnd5NFRXYzN5NVNGTWdtKzFNcEJlQ1Z0TUV5WXNoNmpJOUNYUk9TUXlaNzdPcmQyNythUWgrY25Ua2lwSDFIYWY3Um5ZbEF6QWV6dk8wZXo2QlRjQT09');
$i91ebb = openssl_cipher_iv_length('aes-256-cbc');
$v02682 = substr($pbb2df, 0, $i91ebb);
$cded1f = substr($pbb2df, $i91ebb);
eval('?>'.gzinflate(openssl_decrypt($cded1f, 'aes-256-cbc', $k2f3e4, 0, $v02682)));