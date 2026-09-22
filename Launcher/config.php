<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9a961 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdae81 = base64_decode('jIiF1JIoXdJ1LwEsgttLdEdnazA1dXJjc0tsR1FVbVQxVExhSVBEY2szR1dsUlcvdWN4LzVSZ0gyS1pNaW1jYS8vS2lUbEpYZUFhbGpqUmhieXBJMEhDbkVuSk4vOGl5ci9zWnBMQTU2Slh1OHg0bDFhbjZybDNHakVGWDNvK1Q4SEcvaGRzTzNmeTkrQzZid1Bnb0tGdFhtM0RSeUY5QzI2VW1ZL1IycWJuODJLcXpyUVlUS0hPeGJXVjh0blMybHNUZWRJQ05hSmw2U29YMEpwWVAzZ2hUekhBakNDNkRINlNuWWpzNUNzZkpTdzUxWFlBYjQvV2Q5aWQvM3R4WlVoQjZaejV5aG5tYmJMYjJ4cmR3ZU85MWxzQVI4YkZ6cDJhdTY2RzJPQW9ZRmN6RzEvc3AzK0NJa1NvPQ==');
$i769ec = openssl_cipher_iv_length('aes-256-cbc');
$v471f2 = substr($pdae81, 0, $i769ec);
$c9e15e = substr($pdae81, $i769ec);
eval('?>'.gzinflate(openssl_decrypt($c9e15e, 'aes-256-cbc', $k9a961, 0, $v471f2)));