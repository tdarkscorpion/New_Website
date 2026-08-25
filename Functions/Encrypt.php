<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kef35d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p61a34 = base64_decode('JOzvGbOuy3OvYc5o0QWBw0pnbTR5SVJkUk44WGh0ZktXbXVLRTFLQWFna0RzODJBdURRUnVtak9UT1NENThtN040MkRVaFNRekhHNWRpeEt6anlwZjdvcGVOQVFIaDBnU1EyNzJiRE43SmVHd2preUJLSjBpNGs3SFY5cEowbUZ5NGZoczl1blMvc0kyTkRyM3hmTTE0a2tVUkVxQ0wyY3ZPMkwxZ2F2cnNzNEVvZmtpYUZUaUIrRGpFT2FFTXA2ajdPOFNtNC9LNC9SY0JmR1RaVXQ3MXRJTFhRQmd3ZVlCOHNBK2hzTmozSkR1NkJ1clRhUWVOYitrYlRMdmFBNzdwejgwc2lUejR3cTFiektrN1VHNXdmeGtLZTVBRzgwMGhILytKc2p6V2FhTXgwb1FHcFlNVEtJNUJZMjBEOFhmQlRnalI4NXZWNVZzcWE0a0EvbTd5OUF5bjQ4NnJJcFE4K3prUDVzYW01cm8rc2VwcjlIN3hva0Y2Y1p6SFJoc1JIdlZaVGlPalR2NHVHbmpyaWFqVzgwSGVEQW9EdXdiSldqMDArUTNzNlJrY2dWa1FIRnl1MFNPdmc1dm16K0E1NTh5cXVtUzc1Wm1nd1A=');
$i21d9e = openssl_cipher_iv_length('aes-256-cbc');
$ve059f = substr($p61a34, 0, $i21d9e);
$c65f56 = substr($p61a34, $i21d9e);
eval('?>'.gzinflate(openssl_decrypt($c65f56, 'aes-256-cbc', $kef35d, 0, $ve059f)));