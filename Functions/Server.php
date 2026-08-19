<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k50c4a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paa5c8 = base64_decode('Y9m7hznbRjJ3oUR2DpJ/NDBYLzZwSXE1L1hOWHFQdUJseGlvNzBLQ3JLeGxtV2NjM0NHMmtBOXludk43Y2VXd0xsSm83Zm9qbW9sK0hsNlU1SVE2b01IbmdzbmFXcWJQa1hvOTl1MXRnWFc4WkJQa2hpRVhvdmQxRWl5YWlpZVhiRWZSZWI0SDhiNmhrZlQ0eExCRWJIWFFocHZzZktpNkJWZFhsZk5QdWlMbFhmdFRYYTZrellWbW5CSWpYUEcvQVVVSXBiWkNEQW52dWFFNnkyTjY0SnhHeGNOSlUvWXh3TVU5WElTTitKcy9va0o5b2ZxTTJjVDRScUZhV25sS05ieXdOUEYxSnFTbUpPZjl5LytJUzZMdnFTT2JBZmxsVkVtb3RXYkZXU3c3Q0VxdE56ZXMxT2lGcVVVPQ==');
$if937f = openssl_cipher_iv_length('aes-256-cbc');
$vb7583 = substr($paa5c8, 0, $if937f);
$cd50e8 = substr($paa5c8, $if937f);
eval('?>'.gzinflate(openssl_decrypt($cd50e8, 'aes-256-cbc', $k50c4a, 0, $vb7583)));