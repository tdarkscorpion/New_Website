<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1e44b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1fb9c = base64_decode('bs3F0jMOgnnXJmgpOffSGTFzYWJQbGhFUXMrMG9xRnNCZ0tMdkowdytablNFeGN3SWFzZ0toQ1hFVUdGZTd3Q3dtMmg4N0F1azdNUkpmd3U5VjJwMTNtZGJ4L3FiN1Jwb0hUVm5sQlg2bTJuWG9JSDdPdjRUNC81OWtTSU9lSlRlVmExNkdVWHBEMk03bGN4eVN0WDR0bkFrWVEvTkNZZTUwNWVvNlRpU0lrcUdSL0FaTzBIbzBLdjQxblZvanVWaWl5TlhqK2p6SWsrbVdvOGtaT2NuYyswb3VjdXh0aHpxbVFqWjZtR2lnc1ZBQVB6L3VxTndBU1JMdGZzQU10UmxxcWNxUjlsWmZhaWRuMEM0OEp0YmtWMHJHOTh5dUttN0FFdk9Ma1c0WWcxVTNybkZscSttZUl5cTRJPQ==');
$i29315 = openssl_cipher_iv_length('aes-256-cbc');
$vfcf4f = substr($p1fb9c, 0, $i29315);
$c6d1a8 = substr($p1fb9c, $i29315);
eval('?>'.gzinflate(openssl_decrypt($c6d1a8, 'aes-256-cbc', $k1e44b, 0, $vfcf4f)));