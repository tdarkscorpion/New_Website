<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k410cc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1cbf8 = base64_decode('VkMOT4DJaL3TjEt0mp/thWZDdEZ4b0RTS25iSEovZ0ZMK2lVRjAyRHdKOGlBT1Z4SWIreVo4cWp1alUzNE91SGxjcE1OcTQvdzMvWXRmRm9WMk80cGxiNm83ODN3NFNWbG4yTHYzWTV5Y1R4M2poOGpCREpzcjJCWFhYSVdiaUpwclREZGhzV1ZLSDNvUEhoR2d3M1VCL3hhb0pQdjAzd1FnODFQT3NCVmREZTNCaFFYNTlNdlAzMlNTcmxXdXdldHlacEgxS25iUjJRTE1EaFpnblY0Yzd6NnIrajNXOEY5Vmd4L1ZmKzhGMUZucExsS2pXcjJlYTR6RUZaV2pFTS9NYkRGalAyMlJSVncxQ1JFRmhidVB1LzhTc0djK1JNa25waExRaFkxRitzREFUd2U1ZytUa1RXWGFoNkl0NFEwbFYrUVZVQUZYUmd3cU5xMk5QUHBmVVJkdVAvc3VnY2lDUVJmbDVlQkR3cWh3UWZlOW5abWNzM3FiWlBSbjd0YXV5eWxXbDNwODIyRzMycUhkMEg5ZVcwYlVVNTlWUkV1OUs4dkJpNSttNEZiMUtMYmwvRzE4aUlIQy9ORUVoR2Z6WWh3OUxlSnZxK0FudlU=');
$i73ed4 = openssl_cipher_iv_length('aes-256-cbc');
$v1acc9 = substr($p1cbf8, 0, $i73ed4);
$ce8fad = substr($p1cbf8, $i73ed4);
eval('?>'.gzinflate(openssl_decrypt($ce8fad, 'aes-256-cbc', $k410cc, 0, $v1acc9)));