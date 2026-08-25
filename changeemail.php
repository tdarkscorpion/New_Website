<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka627d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd06ee = base64_decode('UsYNWBxfUTlUWh+lxHPuHWkvUXcwZ2FOMit2VW1OUURwV2xsMGszRHZvS0hLb2dvQU5BbE9Gdlh1UWpua1ZGZTZlQ0czRm1HeGNoOXJEdmZzNElqazd5N0FyYUVIZUVOVk5ldlVhamtEcXJsTDFTUmJSMzYrL280ZUJMeUZsUEdIZDFJN0xBRFJFZ05KNC84cG0vWEhlUmZWWGVoNFExbEx5VEJlVHJsaWl4ME01aThhRlhPdWlOUVpoZXIzQzQyZ2o1Nk9RTzY1Z1BmTnZKRW9Yd2k4NUF6Z2V2d2RSZmtRbjJrbUtSd1N2SnZGcnVJZFJGaG9zb2RTTXlLY3FoYU95azQvWlB3and2QmZ0bWRwMDVCQlA5ZU9Ea0dVcG1uR29hTjcweVhyaGpFRzRGRzdHU0RvRnVCenJUbFd1alJmcmlJUW1iKzdtc2MzUXMxTVRmMXFBUEF6WkZZS0ZjRG91MWhVUT09');
$ibb435 = openssl_cipher_iv_length('aes-256-cbc');
$v2410c = substr($pd06ee, 0, $ibb435);
$c9b611 = substr($pd06ee, $ibb435);
eval('?>'.gzinflate(openssl_decrypt($c9b611, 'aes-256-cbc', $ka627d, 0, $v2410c)));