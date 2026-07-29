<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k06a40 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p69fc9 = base64_decode('YQNp54+gnemRzx0jDi0lsUZORnlWWFFkdllWOWNoZU1tNkw0UTg4Y3AzckFMWUxUbVhOZTRPQWhZc1E0WGEvNmlYaXBFM2d5anhZdy9FUlZwVzFwMHNBUFc5MU1zcW55L1lnQkwvM0RuckFPS3F3NHQ1QWc1YWQvK3ZwWXpDQmJ1eFduTDhlVDlWcWlNMVJFVUJiMDBKTnhhbmhGNDNuUVJiRWt5dUZHL1BvdHRVWFRmMzUzWUNXUjczd0hWd0dHU3BBNGRNNUI2ZzBkUHFJNEp2bGdvODRrZ0dtOVB1MTBMRXd2bE45L09UZmJRSjk4am54Qk9wL1V1VURLenlUaWN6UzZaL2k1dnFNWjF4bkhXSlNKQWkzaHNudjZzak5aQmxXaW80YjRFaWx0ZEJQd09tUzFNbVM0R2JqRHpJZUk4T0RBNkk5TWhoODRSVmkvY3lvNWhiVFA0bXJZY0RwdTJVTzhldz09');
$i700ab = openssl_cipher_iv_length('aes-256-cbc');
$vc0623 = substr($p69fc9, 0, $i700ab);
$c8d3c5 = substr($p69fc9, $i700ab);
eval('?>'.gzinflate(openssl_decrypt($c8d3c5, 'aes-256-cbc', $k06a40, 0, $vc0623)));