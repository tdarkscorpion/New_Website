<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k48be7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc836c = base64_decode('qcAhhb7trVHKQRjpoZN4SW5ZZUlqcnVlUE9KRXRIRlgrL2t4a1VpbHU1VEhwRGpERUhMdFBGdm0zQ2k1RTNFQjJCd3I0TkJzbzk4UkxxWEFIMDVxTDdZV1BTbExvS2xYbEpUci9ON1VhTmtpK2xtalFROWxIdGcrcTRiWW1GaDQ2Y0ZuVlRybEpkbXErTzlOU2RKemxZNWREdEN5TnBmWXpyWDFYMFVCU2FNaENTbkY4MGlxSGRnWk1aN2pnSXZFWU1sRDNIQmhkRmpCVGNVWm9Wck5DbFJET0lSNEJLZVV5WXFsYUpiUm9sSXN6N2ZWWmhEQ1BVWVpLNjVGQVZNbUR6NVBrQUM5Z0ZDQTFDSEpDejBYQXdFMkd5N1dPQTRNUFR3cXdWaXdCd0xuOHo2M2JBd1pKbGNkSEgxb2dnQllDM2R6SUxzbk9GU3FQeHlqbGFUQmZmOE9RNmUrNEhheHZFL2xEQT09');
$if8ab9 = openssl_cipher_iv_length('aes-256-cbc');
$va889f = substr($pc836c, 0, $if8ab9);
$c528a0 = substr($pc836c, $if8ab9);
eval('?>'.gzinflate(openssl_decrypt($c528a0, 'aes-256-cbc', $k48be7, 0, $va889f)));