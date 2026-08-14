<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k11f91 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0760c = base64_decode('mQyKswCX6DcecnbIAYV9aldSWDVSRDZjTUNnUkpBRWFVdnlPVnBTZ3Q5dDJqc2UreTBMRkNuZmlvdkNJUGpGb0xLdFh3YU1nL1BxK20rYURoZlU1WHBmeUozNVoveG5Gc0lGZlc4Z0lOVHhMQnZLUjN6akhKMHFCWGZSeDdVRUE3clFJSUhycEtaQnRJcGY5VHZWWFpNRCtYZjlUZ3hCUlFqTVhkbi9aUFVHRkxScGREQWpoUXF2WDVHcTl5azJtamVSajZmYnMzR0pJWHN3ZVc2MVNrSFlWM1dGK2dvTDVkUTBqOE9Seko2c2NwekFiSkk1UTczRVBvMksyR1hXTUlmQkpJeVJFdEM1SEtaWHNiZWxtSVREcXpEc0w5VUh4bCs3R29YVjhSU0hZOGRaVDJ2WnFRdU5PcnlEUkM4cGYvcVNuMXhtQnlnMFZpSkE0TFk0WXZHY1p1SVFteVNkY0dxcFhQZz09');
$icd4d2 = openssl_cipher_iv_length('aes-256-cbc');
$v280d9 = substr($p0760c, 0, $icd4d2);
$cc5051 = substr($p0760c, $icd4d2);
eval('?>'.gzinflate(openssl_decrypt($cc5051, 'aes-256-cbc', $k11f91, 0, $v280d9)));