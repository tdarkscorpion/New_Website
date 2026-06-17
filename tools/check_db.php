<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kddc35 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1b52b = base64_decode('TKfGRMbtzIHuP4EF3f68hmxNSFRmSlZXNlRTZmRzQUlBZ0EwVHlhYWRjdmlaMG1DMDhKSWtVM29ZdU5xYkV1ayszSXJ0MVZmYzFKT1QzTFdjMEhtK1ZJT2xrQ3A3YU1xeVgrQXR0RXY1L2E3SW5tTkRiT1BPbjdLeDRLRVJoNDR5YVBJdmNaalM3MW9wRittUGRDOXM2Y080cHI3WDZoUWl4ODZYUjlIUDB2SEtZczRZelozQk8xbi9pK3EvaW1iVFhpR1U1dlNjMUZmNkUvRE9haDErV1p1MGxGSVZOWXVtZG5oNHRGQVBwYit2alYxK3ArY2xTUXkvS01CNVdRNWUxMWlvZVNxcWdrS2dkQ0IyZkZ3R08ybUVJalRKMnhOSzRQYVpZQmpXTkY1RzRZa25qV0FKUkxacUNkWDFCOUh1NHcrMWlhdXFPSnRRU1Vi');
$idea35 = openssl_cipher_iv_length('aes-256-cbc');
$v2e7a4 = substr($p1b52b, 0, $idea35);
$c45d8d = substr($p1b52b, $idea35);
eval('?>'.gzinflate(openssl_decrypt($c45d8d, 'aes-256-cbc', $kddc35, 0, $v2e7a4)));