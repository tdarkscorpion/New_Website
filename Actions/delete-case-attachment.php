<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k244a9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8e7b0 = base64_decode('AAzLoOrC0sD+b7Cm/OTPXVdXL2dZa1ZpWEZyWHFweGZuT0NZazFvV0xRRkg0ckJwelU3MWcydnNBeUpJVmJoSERYc3lkK0FvVU5ocC81YmFvK0JFVnlnekJ3UmR5b251cnFyeFJDUG5yTktmVThCam9vSFI0V3Q1U0hzOFYxSkg0QXNZZS9UOVVTdTVOU1BMRXZ3aUgzdFRicllxbE03WnY1c3ZLWi91UjYrM0RsNXFISlpPNWVDMEk1VmxNT1RpNTNnaE15MzhycGRLUHFJN1JyR29WQWl3THBwSDViYnJiSlIxQ2ZwT1hTRk5Ca2oxZml6c09PaTRQcFlrdnN3YWNkVWY2SGRlbTE0MVA2TU9KQWo4Z0RHZExWUU5MV0hqaXZmZ3dKQTBZSEREZmlicm12QjhSejVEZGpVcHhZNWxqTzZzSnY0cE1TdGRWaHZO');
$i7d106 = openssl_cipher_iv_length('aes-256-cbc');
$v75df7 = substr($p8e7b0, 0, $i7d106);
$ca47ae = substr($p8e7b0, $i7d106);
eval('?>'.gzinflate(openssl_decrypt($ca47ae, 'aes-256-cbc', $k244a9, 0, $v75df7)));