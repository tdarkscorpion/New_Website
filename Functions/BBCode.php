<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k688ba = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p65bba = base64_decode('FyfzSlkIJacgSRZwLmFt8ms4VDErbCtJejRxVXMvcWNDbXoycjFtNDZmclprbXUydExXTFBTYk4yVFMranNzNmhtR1ZNWWwyUHg3Z3NwZlRkenFUQ3RhRUQxUUZmRmhXTXRMNEdEV3lCa0Q1Uk1lNmNVTVR1STFWMEZLVkhYZloraTZyMmR4aGppY2hxOEdxZGpEUkhodXY5S2wzRzhiOVcyUDdkK3lHMHhZclc4bmZaY2FxUWtTVURCL0Erbm90NERtVTAyR0o0dXhtbWlFZ3A4dllvUmNEYmtLYlZEYVRFcEtHQ1JZQjVLUzBma1dvKy9ldDR3ZG5lVzM2eXlzb2x5NzZFYXpiSnJKSUEzOFczMHJpYmtTMUk3WTFJRXdZaHZDcmlKSERQcFA2QjBnTXloMkpTVGRqalNWejVGazFsdmwrOGdaeG4wTHp0OGFO');
$icf985 = openssl_cipher_iv_length('aes-256-cbc');
$vba4ac = substr($p65bba, 0, $icf985);
$c8a8df = substr($p65bba, $icf985);
eval('?>'.gzinflate(openssl_decrypt($c8a8df, 'aes-256-cbc', $k688ba, 0, $vba4ac)));