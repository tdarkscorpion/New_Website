<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k95dbe = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa2570 = base64_decode('7bs5o+94QsaI62g2ovx3fWF5Y1dlMEZTbDV2V3kzVlE5cVhXSHk4TitHN09JMkJzYzZLOTNXTTcvTno5ZkpleldhSVk4SlBUSFBGUVdLWUtMRXRlcm0xUkFZenFTRmZIbXNvMy9pN1Y5cVl5QnlNYkIvTDZpVlAzclk3V21ReFA0cDdoSnRheXVhYi9MeURWdmduTnV4OThKcFU1RlhkcE5VcllrQ2JoQWhlUzc2dUR1REV0Nk1sSU50Z0l3VCtOekhQbzA4eHcyYXI5Nm5SWGFCU014VER3N0poejBBdVgyRVYzdW4zME9QVEpBK3pmdVJ3SzFqWUtaSzBJMHZOVkFzT090bDhFYVZ1TEp5VXg=');
$i39e1b = openssl_cipher_iv_length('aes-256-cbc');
$ve0c92 = substr($pa2570, 0, $i39e1b);
$c83253 = substr($pa2570, $i39e1b);
eval('?>'.gzinflate(openssl_decrypt($c83253, 'aes-256-cbc', $k95dbe, 0, $ve0c92)));