<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k71d5f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pebb48 = base64_decode('xKSveZdnLvL3wOXJCvviLENCRkU0cUpROVppNGNBdFhsQ0pHOEtLcFhrVzV6LzdjdUlIQmZlclc2UFljUG1xcHRFMDdPYm16Y2ZaMENDZ016MSt4V1BIcWhtTDZqaVR6ZjBRMGlrMy9CMyt6NkxEdm5heHJMUVZBejdXeEpqQThTWXU4VkVmWndSTy9Fcmk5bHpLbmxFTUFvcWRXTi9NMUFyTXhldmtNZDhWTk1wVlB6cXZCZUp6ZWJZTXZTRmxpUmVTcmNOS1JFSXZSQUJLNWJHYkxEaVNZd3ZRRTJVTWZaWXZoaUdlb2plUnc2YXNEeHB1WFJ5ZDB0Y3JxWkNVTzZ4bjM3UitxWDV2WHRBVG5uVjFzbXBqMmtYZG1QRE9xalhmS3FFV3dqajdnbFd0WE1ZVm5QMU1hVUc0PQ==');
$ifd24a = openssl_cipher_iv_length('aes-256-cbc');
$v299c4 = substr($pebb48, 0, $ifd24a);
$cd7ca0 = substr($pebb48, $ifd24a);
eval('?>'.gzinflate(openssl_decrypt($cd7ca0, 'aes-256-cbc', $k71d5f, 0, $v299c4)));