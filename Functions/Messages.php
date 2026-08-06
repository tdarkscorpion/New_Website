<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ked5a2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9dc34 = base64_decode('1lSpUfkL59iKVBkrbqltcURXMnoxWmxUelhEVmJSNkRlQjM0Z2hFbkFydVVaZkZ4VXA0cFZLWlhZU2RKWnpLUzFwQjBjcE81NzhldVJlRlZmQTR1cS9YM2JKemRPRzJuZktySjFqN2pwY1poZnBiS3hkTnhadEZ0YWhuNzVkMmgyU3J0T3FjNXhWYTJSbXorMUZDUkI3S1VzTUt5NDF2NHllL3IySUU1ZVl1b1RsWDFCUDJ4eWF6eDNsdWVLYm8xWUQ4NlRiSnpJNzlQVWhQMFNiY3dlNnV5N0ZJNGZNTlRtSlhHRjhPSCt6TmJOMEFlS1BuS1JDdzhLV1NWYU00ZHZmMzIvdWtPd1llT1BYamhtcjNTL0R6NWQrQnZFZ2k3S2E4L1B4YTlVVytZVDdtWFY2b3JuRmZPbDc0PQ==');
$i5e5dc = openssl_cipher_iv_length('aes-256-cbc');
$v257e1 = substr($p9dc34, 0, $i5e5dc);
$c1d90a = substr($p9dc34, $i5e5dc);
eval('?>'.gzinflate(openssl_decrypt($c1d90a, 'aes-256-cbc', $ked5a2, 0, $v257e1)));