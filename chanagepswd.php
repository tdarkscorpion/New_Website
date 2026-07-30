<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9be06 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pceedb = base64_decode('A5imF+/g7yauQEvPEBV8fFliWHpNcnVSRTZyZE9MQjZzaitCQ3NPenJnL2UvUTVNeFg5aDFVaEtyZmlqSjNkSDZqNk1CY29mUnFYTlViOVZVY01Gbk53ekNaVmlHcXpWaW9QU0VLRGczdWc2TEhzdTBGMFFTeEFNQ0VWbitWUXBXVFlzd2xtWVVmTXA0RitqOWxFNzU2d0xaRy94Z0h3NDdHQWEyczNSSUUwbExPZ0Y4bXozZ2pwdHk4Qjh6NGU1OE11TW5mcE1rMUM0U3N2ZlgrZGF0NkN2RFBwUnprRXlSNXRRN3Y2UkMvYmVud2FSUkxUZndydUoyT3llNjRDQTQ4RzRBaEhYNHFQTmEzWkNQNmNhWVlzd0lPUUZxQThaRWpZUE8vOTR6bkxLdmV0Vk0rV0QyQndlc0IyT1JoaWNxcURoU1JacjhtMUUxaTAxRkRJRXBZeUdaa29HeFZkd1hXL1dlQT09');
$i480f3 = openssl_cipher_iv_length('aes-256-cbc');
$v0b745 = substr($pceedb, 0, $i480f3);
$c407d1 = substr($pceedb, $i480f3);
eval('?>'.gzinflate(openssl_decrypt($c407d1, 'aes-256-cbc', $k9be06, 0, $v0b745)));