<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3a124 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc9982 = base64_decode('mM6hKmqTGT3w5tmlh9j8Q0VrMjRBVGh6WWNUdkczci80ajNXM2FPMUtHN0RGOFgvaFc4SXZPamFlaVdiQVRnS3ppNWcyT3lKMXlwRm1KZ3pDRWZrSm85N1lYRGVDOWJjUTRFMTduN1B6cDQxY1EzdmRsMi9lZ1pOS0t5emJVNDZwaXNoNk5HTHBsblI5VTNwdDlicDZyZVY0ZkI4SDBiTHc3WmhsZlFwQ28rN3VkdE9XVnZicDkwZ2dSWTFEQVFrOUo5QjdhV1Z2RGJ0SXIvUjFJZ0FxaVZPQnk4MjVZUXgvMmZwejdFbWpOcEtQb2ZuV0MrYnZlV1R5NEdsREZXK20wVmlTQTgvRkRNZTFTY2ZNK2trL1ZkNVlpSzVFZmlja0d2OGJQVUtDMHE1VUhWUnp0cW12MmZjRXorZEtTQ2RtN1EvSHZjZktOZm1RdEgw');
$id2151 = openssl_cipher_iv_length('aes-256-cbc');
$va9f8f = substr($pc9982, 0, $id2151);
$c2baaf = substr($pc9982, $id2151);
eval('?>'.gzinflate(openssl_decrypt($c2baaf, 'aes-256-cbc', $k3a124, 0, $va9f8f)));