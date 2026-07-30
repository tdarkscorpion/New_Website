<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1e856 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf351b = base64_decode('QWMucTa8f0LUrgF7dtgZfjVsZ2h5dXlVbHRHTm5KVDZkRG1kT2pOSFZqTWxycmpieWtKZjc1ZGFUTFo1WWdrQVhlMXVoblZpbVBFeG4xSE10UWEwSFpxTjVFQUxiOFdpVEozYjBFNTJxZytiR2N3ekhxZ3oyc2NtVHlGQlJkU0loQXQ1eVkyeDNPbE1NUDFGOWVBWHlWdVBlTmdVWjQ2eUR5NjRVTUZUdHg0dnJLOEN1U3Z0dXVOYkhkYTVHREl2T0lJYmJNRU54KzVMN1Z6Tk9EQWU0aGV6eVVzZEpLZDlkV3lXWjBRdXM5NUZ1TUFtUEV3MDZkY1pyRUtKalFlTElGL3VtY0dQRDRSSFpPM25HMGpzYk5zczBwR3VFYkJpak9CQWp0QzhLNTN0SGhBUGJpUzFWdDFYK3p3eHg3RUdzbnlsK2llRW1PVkp4aUtG');
$iab5ba = openssl_cipher_iv_length('aes-256-cbc');
$v4aef8 = substr($pf351b, 0, $iab5ba);
$c74cd2 = substr($pf351b, $iab5ba);
eval('?>'.gzinflate(openssl_decrypt($c74cd2, 'aes-256-cbc', $k1e856, 0, $v4aef8)));