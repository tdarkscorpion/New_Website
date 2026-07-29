<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb8986 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p24ff7 = base64_decode('n5qkPmrV24VJdd7QpWKF6mJYZDVoRVhoa2tHWGVsRlJZemZsVEUySDZHSjZpQXZlRjJBQjRzYWpabGtGN2lyZktxRThsUE9NdGMvL25OelhjRmF0K0pLQ1ZuQ001YU96Q1JwaVVEaVZWZGl1MnJlVXUwNlN0dlZTcGdNZElrUWtidFNoT0JiK216cFJIK1ZucUdlSG1WZXpBT0ZiUWUxVElXVUoycUZuRERzTFlkMmpOcGdNZFl6Q3hCTTRkeEs3cmh1V0xyUjIrRkRmTWRaWE1kbVgxTWNaaDAxV2llOXFVMUV2aW1jN3k1U1E4ZzhJZmFHeExDM1FKYlRvN0w3UWZrVzRiSTl2cGFhM2NpalJlTDlqSkpGaG9tZ2xVVkhmWkllaU00Z2h2dlBOVjZDWk8vUy9WUS9PNEFqRjA3dloybUxuaWtSVHlkaEE1Z21H');
$iabec0 = openssl_cipher_iv_length('aes-256-cbc');
$vb6b2d = substr($p24ff7, 0, $iabec0);
$c62884 = substr($p24ff7, $iabec0);
eval('?>'.gzinflate(openssl_decrypt($c62884, 'aes-256-cbc', $kb8986, 0, $vb6b2d)));