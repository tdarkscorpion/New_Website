<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbedd0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p10f50 = base64_decode('gtIzGyR94dYVs2DBnUxZIG1GSmFDeC8zVXZka20xSnNtWDRoRkdIQlVXM3dmNDZzN0VZRi9Pd09qOHhrbk11NjJIOWY1aHo1cVVJS1NYbGdYcGxiR2JFOHkrUUdTUnZ3cVhBUWdtTnpZTjJLcXpPd2NnajBaLzJFbExDRDlqc0kzR0VvNVJyc25CSVVLRlBJanVacm05RzlCQ1QxQlhMdWtnVFQrbHZEVVp2Mmc4S2g4ZnFLbXVIV25pOWx5ZzBwMmVvMjVoUGc3QzQ4Sk5Ta3ltK2dNOHBNdmtrQVFUemwrc09MaFlsQTBoRloxTm1ycjQxM0Y1bUhLVXJSeExwRmp6d1YwM00vUHVRQjE3MVM2eHBnVEhIR1ljYm5zMERLRTZMK2owbm9hSC9tYVUzcStJUGFmZkgwOGlKc042RGNDUmxHejBHdHhBcUZ4YnJRcFhrTGM3VVl6Z1JqMDJCeEk2UU9yZz09');
$if527d = openssl_cipher_iv_length('aes-256-cbc');
$vef777 = substr($p10f50, 0, $if527d);
$c42af4 = substr($p10f50, $if527d);
eval('?>'.gzinflate(openssl_decrypt($c42af4, 'aes-256-cbc', $kbedd0, 0, $vef777)));