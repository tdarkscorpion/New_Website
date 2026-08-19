<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5a58f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8c514 = base64_decode('waOGbjBRiH8JO7P4Z6bn4kpuWGwxS1c0M0wvZXV4ZHF4dmxUVFdxbWNkdzVHZTROZTVROEF5OXlIMC9sUVZzeFdQZEVySERWRllka2s4NVNUUTZHQ3ZGL25RM01BTFFmU0hYM3RwSXdBeXlCbS9IVDZ3WVZRb2dtWFJ1TVJwSitnTXluRjduRVJ2R1Z1UFhsSmtBYUQ4R1c1MWx5NVBWcUFvYm43MW5IL3R3amNRbWIvV1FFZ043RHBNUG9Mbm93UjgvcDhDL1pHYmliNzh6SlNlK3YvWVBHUDNPVjllTit3ekRBbkYvdTlkd1N1K3JSVXhlQVBCWDkybUVydHd2bllLRmVuOWpWK2pQOFFuTTRzdWNURkxDci85V0dteU1KOEd4ZndZL1A0N0Jwa0tvWnpXemFzVXlnWVVzPQ==');
$i2b9b0 = openssl_cipher_iv_length('aes-256-cbc');
$v9984a = substr($p8c514, 0, $i2b9b0);
$cd5729 = substr($p8c514, $i2b9b0);
eval('?>'.gzinflate(openssl_decrypt($cd5729, 'aes-256-cbc', $k5a58f, 0, $v9984a)));