<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka4574 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5e8d7 = base64_decode('qgfSWOA1tbbebYX5oW1mVWFMYnM1blJIbnVsa093NGNKc3gwREx0cDFKWGFhS29KTkdKcEF4ZHNWK1NONEZ5aTkxamZvZ3k4bkdaTk5iUXRFd29sbVBPTnlpc0tRZEdNR1hjbWhlemsxdHk1bXNZUDVQZ3A4WmgyNXpyYWpDOERaVmpsVEM2b3lLQUlmRWl1QTIwN2d5ZitmbS9hc1A3eDNuRTU3NVJCSDZreGM2U291aG4yZUlzOTFpd21TSGsrckhMT2RhVmNCT1pyeHFwdDI3aVRMU1F6cEpHZ2hrdUtDT3JyeXBpdlZrNlJGUXpTUWpwM3RyemZyREZ3Nlp2c3VGV3V3c1Q3OHhsb25oOWI=');
$i73827 = openssl_cipher_iv_length('aes-256-cbc');
$v40e3f = substr($p5e8d7, 0, $i73827);
$ccfaf9 = substr($p5e8d7, $i73827);
eval('?>'.gzinflate(openssl_decrypt($ccfaf9, 'aes-256-cbc', $ka4574, 0, $v40e3f)));