<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k21358 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd9cc3 = base64_decode('BNq5/6xB3Hw7438KPl6aIkdmMzB2cEdrcXNSL29sOTBZWXRvNldVQ283SDRhbkJndyt3RHVoRytiVFV2NVNUTS94b1JXbTBnbXNjRHBVV1VHTVlNSk1TajRrZXpqYnd3L1lsLzVuZEdSNHY0a0R1TEZmRjgvQ0tvMktmRjY5bGdwYzQ3Z1JuckN1S204NXNvM0ZRcWp4WU5MeWlDd3hwSG1EUUZLQUhNcDlGTm1kN3R6VlBqZWxoeENxYkFLNWdUaHRWbWNEM2lURmZtQzFjTFgvTHJ1Uzl3NDlHTUNsLzhPZVdTOGJtUjNCaWhGTU5ubCsydmo0aVRzU2JoWFUwalFYYjh2d01Rd3NvR2NxUWs4Q3IrZlh2ZVNrNlhDdmNsQkFFc21oZm00MGdjL1BhdlhHMU5VODVUL0cwcDYvSnpkOEV3Q0JOU2QxY3Blc1Bv');
$i370cd = openssl_cipher_iv_length('aes-256-cbc');
$vd40b4 = substr($pd9cc3, 0, $i370cd);
$ce7ea8 = substr($pd9cc3, $i370cd);
eval('?>'.gzinflate(openssl_decrypt($ce7ea8, 'aes-256-cbc', $k21358, 0, $vd40b4)));