<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k60dd9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc6e19 = base64_decode('goivca1Tg5Q2YhZo/Gv6RkpTODBoWFlaKzFjS1hJYWF6ekFGTUJJbjV3dXd2Zi84Q3NGV2dBYWFLS3hGS0F6ZTVoODNWK1REZmhOaEtsczNPNXY5M0JkZWJsOGY3MEdvMzNtSU52NnFOOWYrRWxucm5lOHZWWWY0T1VYd3lMSXlMV2hOT09yWTJOTjdtL2x6S0RMNXNOdVJvWW45SVh4bFprV2V4Vk9XOXpIMVpyc0I5Q1E1OWR6NGZ1N0RlQXEyNXFabXN5R2pHU3VYa0FwN2V5ZEVDczVDazRSY3NNU0R5bE53cjJlWGkzOWlJdUZ2SzhpQnZiRG1ONk9JdGw1eXgybEpzZzJGd1BjcnFMa3A5dm91dlovUER4dmE0ZUhwVFIvd2pkd3F0YU9nNTlKNWRqMDJCdFlpSkJDdlpOblRNa3JJQmp0dTJBMFpIcmpM');
$i9ed46 = openssl_cipher_iv_length('aes-256-cbc');
$vc7efe = substr($pc6e19, 0, $i9ed46);
$c8383f = substr($pc6e19, $i9ed46);
eval('?>'.gzinflate(openssl_decrypt($c8383f, 'aes-256-cbc', $k60dd9, 0, $vc7efe)));