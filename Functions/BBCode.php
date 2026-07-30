<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k534a5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1d983 = base64_decode('w26k8KLmOeU93mrUkJkZq0lCaHdpaHhDdnlyckRXT3J3bUh6eFFRdExMaTk3cGR4czQ2Zy9RNFViS1dhR2p0NlJlRzd3Z1B6a0lieWY1UlRndzZBczNPcGNvMVhaTFQ3MnljNjZMVUlJaEczZmlTNEUrazlpZkE0cERaV2xGaEpQUi9sWDRPdkhNNnBYU3VjbzhER1ZoZXVSaFdnSUgybnl0Rk5TajUzSWtkU1ZuZFFZYUxOVEw2ZXQ2WlZDNEZoT3p1VXhYTTZRd1AzcjdNSUZuUXFkTTgramlkbm1FdlRPV2tLTUsrYk0zRkJON3lEb3F5T0dVQmd2S1JpcUdXdWZnRys4bDVHYmdlOTlodFo0TG9FZkNFS3dodGhpL1dGT3lXT1UwV29PUTJDcFRoZFJ2eC9TY0JVQ0xmc3FhME0wY3FuUjRlRTBTak9TaEtQ');
$i8aeb4 = openssl_cipher_iv_length('aes-256-cbc');
$v004d2 = substr($p1d983, 0, $i8aeb4);
$c24f08 = substr($p1d983, $i8aeb4);
eval('?>'.gzinflate(openssl_decrypt($c24f08, 'aes-256-cbc', $k534a5, 0, $v004d2)));