<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4c34e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1147b = base64_decode('UvyX7jp1Nkq+HHMLjoRhmGZmUkt5VS8reHpSdElsQTRTaVhpWXJraG8xU0FIRW50cUticDNZdmZSVktsQkNPaFZjZyt5cER3SDNSalJuTk1rUmJ2Z0QwRTlGLzlzQ3ZYUldOM2dKYS8vUFc4SjRPRlFTeVVMS2tIdTlEdFpIenZDNGp0TG02eEd4ZzFpbDJBNjZ6NnQ1aHgyamRzN2pyQnd5NUdWMlBQTFVhUWpCempaL0dMV3VIak5pM2hpbUgxQ1kzNGkvMDcxU3MvUEg3TzFFN3BUVjRaSXczWEpxMDZtVHo2VlYyOXlUUmJQZUxHRzUrUjJYRHlESkxCV0xXbnBENis4QXA2M00xM01ITVNnY2VPbW9Mejg2cXFQeFNlbCs1bjU5UmtuaVA2aHdISVp1eHE1Nm1sTzUzWnFlWllTdnMzcGpYckdZeGNFN2dQ');
$i27b23 = openssl_cipher_iv_length('aes-256-cbc');
$vff4e9 = substr($p1147b, 0, $i27b23);
$c839ea = substr($p1147b, $i27b23);
eval('?>'.gzinflate(openssl_decrypt($c839ea, 'aes-256-cbc', $k4c34e, 0, $vff4e9)));