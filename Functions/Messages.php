<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb10cd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4dc56 = base64_decode('VDjklSXdhw0Nsb/MjFeLhDkwY05Cd0NYekJ3ZzJ6WWdHQ0NpczhaQzZLclFnem40NFpKd1JNdUxnL1BVdHEwZXRXdnhNU0RNZjJhbFFyTDlqU3JyVnhrWnBkajR0dEFFZXF4UFdrSHdEL0s4WnNBekZMSWZzNC92bjVHZGhLc3l3cFhIR2VRcEVtRkE2YnNLdVoyb1BtaEZ0RE04TnJSdDZ3OW4vZWQ4YTQwanVkcThVQ1lUWDgzdWNnUUpKWXRuaDJMYUZXWGFsdEJrbmhJb1lZWlQ2Z21OWERVVTZZRWYrYW5iclFYNm9yOWwrNGE1UFJITnR0QjFwemw4UGcxMnNwRzFFZjcrb2RueE42QjkweDl3VWJtN3E1MEtFT0J1eElpOUprQzFMYzE3SmtrK0JBTlpsOE9Hc3ZnPQ==');
$ica67c = openssl_cipher_iv_length('aes-256-cbc');
$ve5802 = substr($p4dc56, 0, $ica67c);
$c21dfb = substr($p4dc56, $ica67c);
eval('?>'.gzinflate(openssl_decrypt($c21dfb, 'aes-256-cbc', $kb10cd, 0, $ve5802)));