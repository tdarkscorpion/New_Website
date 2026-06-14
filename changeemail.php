<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka5dde = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p15b53 = base64_decode('IIop1hWwOgsp9X/U5zPNxFpHNUowV1ZOcHV1SmlYRlNacjdmekVCa0wwK09zM1ppNWVVT3ArVkVvSXYrRGJ3MTI4R3JPSGppN04xd2xoenpKdUhWNlVpc1pZRzNQODZsOVE2aXZyeFJBNndqazhNRmx6dE1KNjRnRnVVV1kyZlI4VXhwR1BIR0tJUmZPUyt0VUUwVmsyZmk1N20xakk2Rk8yNitsR1ZxNWVCVUQwQ0xHMGkvVWh0Si9qem0wbmowQXV3Y3JJaHhpOVlLWDhYZEJjRXVwY0lvYlpjSHd1Qy9CZnFucUl3TzVzTnhjTnZIWlJDTzA5eVQ3OHdpOGZuWVJVUXBUMnZhWkdMQytadDNYRm5LQStHZmVlSDIyUUdwaXg0U2FpRk5aZFR4K3R4RzJkMXZOa2VmSGRMbTI2UjZsbjEya0xLOU5zNFZqc1Z4RGtYakFhaGNNY3BaN0luRE9XRVFFUT09');
$i887f9 = openssl_cipher_iv_length('aes-256-cbc');
$v20a6f = substr($p15b53, 0, $i887f9);
$c9e713 = substr($p15b53, $i887f9);
eval('?>'.gzinflate(openssl_decrypt($c9e713, 'aes-256-cbc', $ka5dde, 0, $v20a6f)));