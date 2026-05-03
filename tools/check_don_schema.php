<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7a55e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc4b35 = base64_decode('pNCD+ZxBqn8MArqS2iYP+VhQczIvKzczUmVLeVBwejFNYW1LQjZuWko1RUZwc0Ryd0FKVHVVSEVrUWFxQ05RaloyUlJ0SEVQdTlJTG11bm8vcXVvanBuUU1uNlBDVHIvVGt4ZmJBdkxtcy9sdHdrY21ScXM2M1FOTHQ1VTF2dkdpVVljYnZtWm55cnN1Ulhzb1JJcVFhc2c3Mmw4YjZqeDdHc3VtT0lhY1VZdGcwRThUUW9vNlNDU1hZYmZ0YWZaWE9VNERSK3U5b0FFUXlTcVZGL1dOS1lJbUtwNXFhMDVVd2IwZnJ0bXNoQzZjblRUKzI1K3ovcS9ENlE9');
$ie778f = openssl_cipher_iv_length('aes-256-cbc');
$v48bce = substr($pc4b35, 0, $ie778f);
$ca4438 = substr($pc4b35, $ie778f);
eval('?>'.gzinflate(openssl_decrypt($ca4438, 'aes-256-cbc', $k7a55e, 0, $v48bce)));