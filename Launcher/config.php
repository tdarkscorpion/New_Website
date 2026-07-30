<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbda56 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf8949 = base64_decode('BcqRC5e4n9f2TUAuZ2xYkjJKWmIzeHB0elVxZk5pNUdwazlRcUVUNWI5SHd1cU1mWTllRVJmTHNBSUs4azFjZ1djWHhUTGZLLzZKK2h4ZG12RVd2Y1NLQXVvamVNdjdTdlVNWWRZS2ZBTWlHL2R1djgxMmRHVUppVlBtQ0didGt3YUZwODRRMGQ3cUNSTC9BMzdMa3NjSkZDcU5tSmw2eEE4c1Zmb2Q5UlZvb0N0SlJIU2J0ZWRXbUxreE5KNEtZSllkWFBtRHAxT1dQajZCbkNzMThTbG4rbzVtOTRhcjhGeUUzeldoVzREMklrTFBBQ00vUGxXTkU1WHd4bzBzTldWMEZCeENiUVBKR2t0ZjVQMDd1a2d1V2p3b1hsMWhKQzVMOEVuOVhsQWhoc0tEMElVajZscGpZci9JPQ==');
$i363e4 = openssl_cipher_iv_length('aes-256-cbc');
$v96af8 = substr($pf8949, 0, $i363e4);
$c633e9 = substr($pf8949, $i363e4);
eval('?>'.gzinflate(openssl_decrypt($c633e9, 'aes-256-cbc', $kbda56, 0, $v96af8)));