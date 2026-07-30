<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k05c1a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a6c3 = base64_decode('FWyDvKmcYBV/Ry5Fo7+AtlVCWkpWV3d6NXZiNXdhM09Cdko0bjNwZGZYTzFHM3RZVUN1WVNZOTZDbW56QWxwZUNXSytnUGYyYlYzUFpMSjlpcmpubmN4Y3RMbGREZmY0VDlqWnJTOGxiNzQ0NHg3UFVBQUlla1ZSelVjZms2V3BySWFRakxLK0dQYTZldDg4c1h5azdrSDhBbUhLVTRqTGRMNzYrd0xQTXllOW5vSHZiYjJnNHIwbU1xbDkwT1lVTitlbnl5aFAxZFZOUlRHenNXS0szS0lXYXptZkVoRzZFZm1WWTBwTG1LTWdISGhVVGxCV25ucDRITFBKL2ZGRmdlNk0yaDBkajlxVXI0enRwcnorSlM5RUtiMDdyMU04N0JtbTB4bzBKVU5lM2JtUzB1UDRRNjhvYkxFNWVRbGtuaWRLTE1YNnkvTjZmRk1S');
$i4095c = openssl_cipher_iv_length('aes-256-cbc');
$v0c280 = substr($p5a6c3, 0, $i4095c);
$c1280c = substr($p5a6c3, $i4095c);
eval('?>'.gzinflate(openssl_decrypt($c1280c, 'aes-256-cbc', $k05c1a, 0, $v0c280)));