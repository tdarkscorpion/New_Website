<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1c25b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf7261 = base64_decode('M1ADVuhuP7ZSEuRw+polb3hmckR5RXA4MGVteEcvdG5DYk1ldzFCVUVaSEw1cHgxa1hlZ0pRdVFKb28xZW5JYldISXFLT3NHdHZmT2lhWHlFMkRVenhnYkltbzJjcU5tWFM3KytSdU9YMlBFZjlySlpwWU5XT0RzVjZrODlXeHBtVDNIbVpwR01SU3dSaitKM2s5RHNWL3BYU1dEeHhNaGtlTkxxVFJTUU02WGZFL3hqR1FFNmhwczZTVjR6ZnEyNWxVVjhvU2p3aUF6SVZaTmFUTzJOZzRzT2ZGN2hYaGY1dFYrU3hkaUNEamtQb0RTK2FvWmp1SnRSV1IvSU5BYzJmeXZlQU9kRE1PQkp4bVduSkNjb0hLWXhZVk9ycWxqMFRTNG5pSDN1MXkyczJEQjRyaDd0M0hwd0hRSUlQOG5xWFRxcmdpM2VqV2x0ZUhBWmsrcVhtSkRuOVVkYStZZnJTazRvQT09');
$i91a86 = openssl_cipher_iv_length('aes-256-cbc');
$v86d5e = substr($pf7261, 0, $i91a86);
$c15deb = substr($pf7261, $i91a86);
eval('?>'.gzinflate(openssl_decrypt($c15deb, 'aes-256-cbc', $k1c25b, 0, $v86d5e)));