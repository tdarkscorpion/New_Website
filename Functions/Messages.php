<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4da38 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4a39 = base64_decode('04jRu3U1c+4psskuMkYI6ktyUDdPRU45ZnZzT0dXaHVhS2FUUDh4cHBTODZ3QkhBRG1DKzVDNFR6bmZZM2ZiNE91bUpkOHVxT3VRM0dFRy9Fdkd5L3JPSjN0SWZYYi82N2VvcGpuNDVPZDNqeElPVjB4Q1BzdTYreFJtUVY4SUtqMHlmcnNYaTN1WGFYMERIWWVqRmFya0xKK0cwNWtDVmFQTTlkN2pGMWlsMGhuVktycXU2eGZ2RXNXblZxOGo0cjZSUWlqc0JzQThHYzAvL285M29CS2lJWVBLbHV1RmN3VGc1NkpFSWZGYWF5MnFFZEp3NTlIa3lvNGs1bEN3MHF5VXNHck80ZHE5UjN5ZnFIWWpEQ0xjcEVOQ2FxR1AxbG1sdTlSQzdHbVRpNkNROGhKbFQ2TEJXajhzPQ==');
$icbff7 = openssl_cipher_iv_length('aes-256-cbc');
$vaa980 = substr($pa4a39, 0, $icbff7);
$c07080 = substr($pa4a39, $icbff7);
eval('?>'.gzinflate(openssl_decrypt($c07080, 'aes-256-cbc', $k4da38, 0, $vaa980)));