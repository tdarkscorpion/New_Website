<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdcdcf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3b0b = base64_decode('W4I88NgTvIUXIqg4veSBlE42bXhFYXAvWVpvbFpCa1JpNWJDMUYxUEF6enZvQUlKd0NKMGRKVk9XcDBoaDkzYWdIUzZXbGtMT255R3N2MitSd0FNUHpPS0t0bFI0WlNtVDZSNktNK0JTd2psQ3lzeTlzWEpRdTBMVHg0ODBITVhNSDk2ekVuS3paOEtpWTBXRnB3UFlqbzMzOHBvREZSQU1pR1NHMUZINUNZc2JXL0ZkUGZraW1oeGhJWGtHbFRJQ0RxZDZ5STU2NjN6NHJTRTZ4Nlg0cWtxWk9NWlpEMW9mOXJpSDErbXo0R0ZIV3FUSTA0SHd0U20vWi9BaHJFUTNqL296bXBRVUd6NTU0WHk=');
$ifbfd5 = openssl_cipher_iv_length('aes-256-cbc');
$va1497 = substr($pa3b0b, 0, $ifbfd5);
$cab728 = substr($pa3b0b, $ifbfd5);
eval('?>'.gzinflate(openssl_decrypt($cab728, 'aes-256-cbc', $kdcdcf, 0, $va1497)));