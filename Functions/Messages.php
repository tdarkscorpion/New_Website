<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4ffed = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbc0fb = base64_decode('e742uPQMKv+ibiMlH3WHgzlqN3gwMnUxZFp2azFpQmYyckpxSG9mZTJrZmhaRVFBZ2FPTmxJUXhjeTBTeUlnSXRzZWlaZ1F6SDhqYWlvRklaSlB0cmJMUWtsNFFuZEp6YTVqa1VadkorcG45bG1KNjIzZ3Rmdkk0N2dlTjhsUUt0UjU4a0M1QXRXN0dLNmdHUmh5b1JoRW1OK2kzTG4wN05VME5FMVdQbEVoYjM5WnBPLzUvRGczc3JHNnd4VVBEcjFqK0pNOEJpc3ZjWVFWWU5GR2RUR1hsRTZpb29QOXR5dHlzMFVvKzMyZERRWnh3UXVCcXZmSVgyT2xQUjk3b1NsVndJVXVEcytMTGI4eWxRT0NFa3NOS2huQ1BPUFhyUjh1dEY5RHhGNTY3QXZVL2RwMmNEYnUvVHJFPQ==');
$i48824 = openssl_cipher_iv_length('aes-256-cbc');
$v03eac = substr($pbc0fb, 0, $i48824);
$ced2f2 = substr($pbc0fb, $i48824);
eval('?>'.gzinflate(openssl_decrypt($ced2f2, 'aes-256-cbc', $k4ffed, 0, $v03eac)));