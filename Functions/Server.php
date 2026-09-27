<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7290c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3c84e = base64_decode('/A/ptEnZsdM+oSNiZA6IVXFGelBKK0RVTjFqdjFWd3dTd1JJOXZHMHRFMHJDaGlYNUpTdjdMekswMW5XSGV3a1dQMDBQU3dZSDFpS0ZWaktxc0JVZWxFdFRtajlZVERlMEhFUjRZdkc4QVIraVYyUEVoeVkwTHRjTEViZ1lMejRSWDhBR2habCtOK2dTL0NDV1lGdEYrcTJUSmxrcXY5UFMzUkRQVXM5S2lPcEVpMGJITDBrQkg4aWdCUnViZ2xlcktPb0ZiSmEwSEc5R1NNNGRKejF2RzBpbVVpUVhEaEtuc013eGpsd1NFeDVIZFYyWXF3S0NRRkJ0ZTFQa3VhVlkyYzJaWXZWZ2lra1hra0FEWnhWNVBYNnBJMTFWRjh6QitWUHg2eFpudWt4cEdPWEVoUWdUcGMvbUFnPQ==');
$i05a13 = openssl_cipher_iv_length('aes-256-cbc');
$v71e92 = substr($p3c84e, 0, $i05a13);
$c7e27b = substr($p3c84e, $i05a13);
eval('?>'.gzinflate(openssl_decrypt($c7e27b, 'aes-256-cbc', $k7290c, 0, $v71e92)));