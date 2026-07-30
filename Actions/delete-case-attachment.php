<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2ea6a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd6bd6 = base64_decode('uQ/AxKPkaDAeJjaDvlKa/XhHelF5VmxIbGY1L0ZpZy9NY2d1NWJBOWhZOFF6RFcvYkhKNys4N1RaZFZwWFpkM1lTSExRT0Q4UWcwVFVEaDRuWGNpN044L25rNklOQ3h6cGF1dkZFKzdGUFJkcUxhNERFaHhIZkEwVzVScW5SaVJpZlk5WndOeEtIc2VOb0M3QWU4UHJZbkJPY2xXTEdGaURuMkJiRkZnWW5RZzdzUEVsaTlpV2lFd2hiTW9ENlhuRFgrSjJTR3ZadHpqZk1NOG5VV2I3cC9XeW96WUdjM0ZPMTBYQ1R1b01XdDZlaVNYbDFGS2dCVFVOMGlPcXJDaWwzNU9ha04yYVlYNklHZHk3bThDTlAvRjZncFZaRkZPMnZmSEVJNFdkOGl2QkhFZzByVVFtMU5iZHhVVGtQclViaDBwOVBQQmxYaHBCRCtX');
$i5f189 = openssl_cipher_iv_length('aes-256-cbc');
$v665da = substr($pd6bd6, 0, $i5f189);
$cde99e = substr($pd6bd6, $i5f189);
eval('?>'.gzinflate(openssl_decrypt($cde99e, 'aes-256-cbc', $k2ea6a, 0, $v665da)));