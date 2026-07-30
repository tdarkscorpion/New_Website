<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k61a74 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3180 = base64_decode('sprV/+r1+0botJ26BGdx3VNiQS9sTGxPaE9BNHlvRnAxWmtBZjdPK1A2dnRDZXdaZVZ3cWkvZERxNWlvVXUzaHVsWC9DdEZJZ2J6dnprRVgraVAxbVNRSjlUQXkrNU4vcVFySGFqemMrOFdWY3pmcG1HdTliaEMwQmVhTS9va0JpNkJzUU1FWWZ3Y0NJUWp5RHlUREFhdWZFNzZhand5OHhnT2NxS0JUdXc2NFl4Mzh2c1FiRkw1TDRwTW1KZnNHTVlacnVJcHd4ekdzb3RUTGxsbC9lbGR3YTgzZzEzeW5JRmxmQmd2K0ZEemdwSzZ2RzZwOVdWSVZ4Q2tKS1dNWlNPSTFUcytwc3B4UDBsNXB3ZmxMQXlPTWpjNDVZNy9PVlArd3BQNEp4cDhOMDBJMWpYYm5yVU9vY3QxejRrNDllMDVtZmUwdkx2WkIxSDk4');
$id49f5 = openssl_cipher_iv_length('aes-256-cbc');
$ve6fa1 = substr($pa3180, 0, $id49f5);
$c14756 = substr($pa3180, $id49f5);
eval('?>'.gzinflate(openssl_decrypt($c14756, 'aes-256-cbc', $k61a74, 0, $ve6fa1)));