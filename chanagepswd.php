<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke24a0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p36114 = base64_decode('jM35E7tBNi9P3+D/xfcpZmRzNDVSOFdzaEY1ejhZZ1dxbitwUXc5SUpmdSs0QUlaU3YrT2tadkVTK2NiQmhVVjJUOTUrdHQ4TkpFc1MzVmMwTFlHK2lnaGxiQ0tiTFduemRHZjBLSHVPZlhGNzZIV2ZNbnlaYWduWk9XRnNYcUJ2YVlIVnlhdkVjRFRFbHdLaVlqN2trNk9rcDlaWmkvamRocFRmay9aSzMvQVJWYlQycVUxY09YWEFPVXM1bElwb1pwRWt1SnZuMlcrZ2VJTFBkQ3lodU5abm9xZW9CWEh2ZU1sbHZVaWgxeUJmRFQxbzN5b0FCcTdnT3o2M0ZTd3FvWENjREZkenE2S1lDOVg3L25PR29kL0JEakhEbmFOK1ZObkRsdkJHQkFPQzlBbzRkM0pNRVNFRDdWdHJlSi82V2JxRDExbU9OdGRlUjkxMy9hMDN1SFBoMGdVUEpBV2hHZ0JoZz09');
$i75829 = openssl_cipher_iv_length('aes-256-cbc');
$v0acff = substr($p36114, 0, $i75829);
$c458f5 = substr($p36114, $i75829);
eval('?>'.gzinflate(openssl_decrypt($c458f5, 'aes-256-cbc', $ke24a0, 0, $v0acff)));