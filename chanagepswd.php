<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k50f34 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p502a0 = base64_decode('YopyMHf7/Byyhc3dl3ljcUgrSWNtUDZiWmVka01aTDlTSWJTaG5DQnhhNm8zeElPZWhmNFdndm9YRG53UFg3b0Y5b2xkeURzMndBZCthUWptYTZVVDV0UUJEdlF5RTd3V3YzVy9oWmdGbDdHRS9nWTV0UVhuNjNpcHM5amdUVkQ3QlY4dWlySWdQMDZEdTEzZVBveUZJZFRoUVlrOTZBa2E2K1pBc1VITThmSmNLWkdWb09QQ01KRzRXRXBqRkhuU2I4TWhZWEtNWlRyQk9ydjI1RW1NNzZMTWx4d2xLNjZlWWlsZURuREZYU1hOT0lpTGdiWmFwSWE0bFJ0VlEzUStBazZ3b2VORjlucjN3MllLK3R5dExCWEg4QXNIaHc4MWx0eEE3Y0V1eEc0eDRIWTcxaEhPcmNmY3YwR3llSFg4T2hMNFUvQnhZR2daaDBCL1c4Um1qZXVBa1l5bXlDeFkxL3hpZz09');
$i68501 = openssl_cipher_iv_length('aes-256-cbc');
$vfcbf4 = substr($p502a0, 0, $i68501);
$cb8a7b = substr($p502a0, $i68501);
eval('?>'.gzinflate(openssl_decrypt($cb8a7b, 'aes-256-cbc', $k50f34, 0, $vfcbf4)));