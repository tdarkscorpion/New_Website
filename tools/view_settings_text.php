<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k58b35 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4c98b = base64_decode('8S9/UmzMRiUVPqcJEP43/WFyb3FjUTJzc3VQYnJZdEVQU2NJT1FoMmFPSjcxcVlFTWUySmdFbnh5VDNaWmlMRmNLOVhhcEdzdjRTMm9HVzBaRk1rMkRFdDRRSS9BVFNWRHhOcFM4ckU4SzJqVk5Rb0NjZmVFbjJnOGdibkJoeTl1OXlFZFc3L04xQ2xZMEhDRU5FN2pJcUZMcnZwMlZaNkJSNWRaNTlPVXoyNnMzRWZ3S1E1bnJ4M054UDQxQzQ4TlNTQnJ0elo5Y2VTdlQ3bzBSMlEyZGZrNW1ITkNXbXVBUEpOeFNCazU4K1IrcSthUDF6blk4SjREMTVQRXBhZ0ttenVOWEFhU2pUOWY4aW5XcUFEWVFCNjBwekdrWlZ5MXU0NUpLcFFZRnNiNkVkZlZsS1JVdkY1M3BDaTNYZ2Y3SDhPNW1PU1FBdUgzRGhVVGJrdlJZcUI5dHhEWWx6a1pVK20xdz09');
$i2bedc = openssl_cipher_iv_length('aes-256-cbc');
$v43cb2 = substr($p4c98b, 0, $i2bedc);
$ca8b51 = substr($p4c98b, $i2bedc);
eval('?>'.gzinflate(openssl_decrypt($ca8b51, 'aes-256-cbc', $k58b35, 0, $v43cb2)));