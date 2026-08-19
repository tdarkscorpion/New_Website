<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdd64b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc9758 = base64_decode('NPYfnWF7uQ9/PFOJg3C9UFN3YVdwT3U5UDB1WC9PQ3h6R0FCd0paTmtSd0x3QjNzcDFUUngvT3AwZmxZNEFXeklRQmxPd2w0YmYrZGM3c09uSjBudk0xVCthSEgyWjRKVmhHYjV4NE8wVWhnVlVzVEJBN01BNWtqbCtRN1NVYXF2MEI4SjU2cFhXUjQ1ZmVDUDVERmZLUUp1cnIvUEZnZWlRaWpjQUdTYUxEeEZRSmtTcXVKWGFxNXNSTVFBTVVZNjlQWlhkNk1uZzU5eTRNTTF1Q1pHcmJqOFBueUhjckhsK2YwZERNQWVWRWdzMHJuaXBjWDM1aHpWVFhBL1BhS1ZvWnJLdDRJWnh6YzlzSDZwMzE5VitwdEozblFLZlRURU93VGdEQnROcEJVTi9YTU5LcXBFRDlmbUkwPQ==');
$i3b9c0 = openssl_cipher_iv_length('aes-256-cbc');
$vabd99 = substr($pc9758, 0, $i3b9c0);
$c0231d = substr($pc9758, $i3b9c0);
eval('?>'.gzinflate(openssl_decrypt($c0231d, 'aes-256-cbc', $kdd64b, 0, $vabd99)));