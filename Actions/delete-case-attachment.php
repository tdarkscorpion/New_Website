<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7c7b8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb56a2 = base64_decode('EicmwtrZ/1V/qoa2xtv+zmRQREdFM2dYZVNhTEl1R3RYQkV2WmVhdnVNcW0wdVVFVnpFbDRTQWZPczRCdEFOQVZhQUVoL252MTB2YStjZ29JaDM3L1Z4Q0xtejJZQmxnLzdPZ1NpTldxOE1BVjhJcUhXbCtNdWIrM3hOTkZqNDM4Y2ZrQzBwOGE3MEkweXJpdjJmZ282OFdwenBoOWpFbCs3RkJZWU95MDI0Y0dpMzdycVNqU2lDYkhCenNDSXdKRXFlOHZPZEtHTGcrbWJ1dEV1bWJXN1AwbHovRUJIbkxDQkR1d1NoWTI4S29zaTJyRU1PNlBjcGdPOGthQm1PcVdQdVVkSjhSd0tUdWZzRWgvSkZuOTZPSGpCRU0vWjluc1FCV2VlbnJKU08ydGZxQTNUaUFNdHh0MlBrems3MjY4Q20yTlYzT0dKdmxVck0w');
$ic43f8 = openssl_cipher_iv_length('aes-256-cbc');
$v4ddd8 = substr($pb56a2, 0, $ic43f8);
$c286d4 = substr($pb56a2, $ic43f8);
eval('?>'.gzinflate(openssl_decrypt($c286d4, 'aes-256-cbc', $k7c7b8, 0, $v4ddd8)));