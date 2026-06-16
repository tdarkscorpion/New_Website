<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k36448 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paa684 = base64_decode('bn+m/eqcT/77XQ6z6nMiSFc3ZnYxdm9Kb0g3dTBXSFZVRU5zOG01M0NQeGpDUUFhQ3pEU0liYWhKM3JCRzczdVpKQlJjZkkzTVJ6TlVyQmxQQ21hMGtRbHltTzk1c00wdUpXblVFbVU4V016dmEza1Z0aW9uVEx5cjdYKzZNdnQyVk5rR2t3S1NWbXh6VmFQRWZ5RTJza211RFZnemF5M0JtVytFLzdBNS9EdklLTHA4RUJyUTlUdXBnWUhSamNvT2JSajRjbW1lS1YzT1o5VzhtOHliVkRJOWcwVUZsRS9UY0o2cUVsaERPWVdPcWNSd0pTZ2hFVFllZHhBajBvUzZpM0VMeFplZkthV0hGZjNhdm02aG13NTJtZHpjUVVBYzMyZEhSczJMRHpkNDJYMUtBM2pnSlVtb2lvPQ==');
$i412a7 = openssl_cipher_iv_length('aes-256-cbc');
$v39582 = substr($paa684, 0, $i412a7);
$c89960 = substr($paa684, $i412a7);
eval('?>'.gzinflate(openssl_decrypt($c89960, 'aes-256-cbc', $k36448, 0, $v39582)));