<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfed45 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf9122 = base64_decode('WUxtaGBvcHWXwR/pCVix/UhjUnhRMGNidjliUXFjQWxBbFVRTHJJcWpKMVV6VjN4d1BYMklKU2xNbWRkTzVmcEswTXgyclptVXRrZWtnMDJ0TWxEQ2VEMitxQWVyMmZvWjRDV094ZnpUR3YxZHZKQWpsTFUxRmNJTjJ3Z3oyT0Q0c2o2ZW0rNEVwV0pTOW5PR0J0Y2k0YU05K0JRNFVFRTJJWDVBc0g1c2p2bkpqZlNGdFFKVHdib0N3L2lCV1d1b0VHOE94TVpTNzhOcHA1aVdseEJVVUg5Y1VHM1JmU09GbTkrZkZWTGg2MW82Q3MzWTdVY0pNK0pnUEtadzhsaWJiM1NQTTdVWUprdVZZdW4zYk1BZmQyZlZIc1pyYXlhcXpmM1dSZWhaWkE4TExQb1JKaElMMXhMVjYrKzBzNDVSSENRMVdlQ1NuazJZdUFY');
$ib72ad = openssl_cipher_iv_length('aes-256-cbc');
$v3a5bb = substr($pf9122, 0, $ib72ad);
$cb5588 = substr($pf9122, $ib72ad);
eval('?>'.gzinflate(openssl_decrypt($cb5588, 'aes-256-cbc', $kfed45, 0, $v3a5bb)));