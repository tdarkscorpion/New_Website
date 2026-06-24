<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k25e17 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p88c7f = base64_decode('boXWCKu9NSkx1RSi9sFIM2Y5aG5QaW13V29uZ0VKdEhrbE1vcGVqc1JqekpCRWJ1R0ZiRUU4b0RyVU0xVEVMUW0rZjEzVUpacnR2TStwa05sT3hKUGRNdjIwVzlzb1loVHJ3NCtFNWFGblp6Mk5JUjFuNFZmdGpzQyt6ZE1ZZFE4ZVZuSVBHblB1SDJkT3lodDcwNDRFNUY3YUtKdnZ0L3piWkpEN080eGNIMVEyYkFpNkM1MmVpVHFaT1VoV0Y0SXhtTFJld3RjVXorb08rbWJUYmRyUHZjRWRlY3JEVlgzc0paQXRXM25ybVZnWEtZaldDZUZqaTJMR3ZNbHJLM3gza3prQzZ5NE84MlJleTY=');
$i460af = openssl_cipher_iv_length('aes-256-cbc');
$vf35d0 = substr($p88c7f, 0, $i460af);
$ce435a = substr($p88c7f, $i460af);
eval('?>'.gzinflate(openssl_decrypt($ce435a, 'aes-256-cbc', $k25e17, 0, $vf35d0)));