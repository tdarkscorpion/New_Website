<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc493b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd564a = base64_decode('EzNK21NaEVXvHZiJo5cqbnk4d0hzZlBHbFRPcnZaMmdER2Y3OEYwdVoxUC94NkgxY1RhYUc1UFZWZmljMUxDVUcrR0tMSEVicjYwNjE3ZVovMThwS3M2Z1B6cHdYeTlmQkxYRWtiMTNmaDlheWU3YVhyVEpaWEJoYnRRSWRROEMyNWNOWTFId1hjNDFyNHQvdUd6UDlPa2NRNHB0MDd5RlJDcnZjUzhPL0lmakxHWlRqK1o0OE1vQmU0QzJBWWhqWEc5b29RN0ZVVk83c2NZdG1EZ1hoLy9neDRvSEtMdUdobC9xZ1gxWVFBZjdiYTJ3UUpDQ1E4TndOKytWVWh2b254bXR5NytOTVVsbkNSN3FsT0xFOXZjemRpSElMQ2cvZDcwOEtvdEkyN0hTWXczcmhVcHhvVnVFemFLczFURW90d3VUZTI1OU43c2NIdkZPa3puOXE1QTRvRFc1ZzlIYURVZFJnUT09');
$i093ad = openssl_cipher_iv_length('aes-256-cbc');
$va2cbd = substr($pd564a, 0, $i093ad);
$c3bef9 = substr($pd564a, $i093ad);
eval('?>'.gzinflate(openssl_decrypt($c3bef9, 'aes-256-cbc', $kc493b, 0, $va2cbd)));