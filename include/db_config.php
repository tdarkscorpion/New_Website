<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l86c5e=__DIR__;
  while($l86c5e&&!file_exists($l86c5e.'/talisman_loader.php')){
    $p=dirname($l86c5e);if($p===$l86c5e)break;$l86c5e=$p;
  }
  if(file_exists($l86c5e.'/talisman_loader.php')){require_once $l86c5e.'/talisman_loader.php';}
}
$kf4a0b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kf4a0b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p8559e=base64_decode('PAbhgGCrPBFmhPqe7n1J03FmaUJnRk1icUhVa0JjSVV4aEg3OFZNck91VzNsb3JCZ042T0syVmlOenE5b2E2dkh5TFliY0l6UFo1MEtUTitlUFRzTHgrZ3JCZ3dPaWpPc0RNcXo0Q29WY1kyNFo1NmJmNFplRVVubGhYSFVURTlUeGRmbXlEckxYMEhlL2w0bzBub2hFa3R0bmYvSXRtTmh6bkt1ME1sd3duVXoyQXlNWTZJVFlKcHJBTGgwdmJDcWZpQjdIMnJFd0U3UEZTeVZJRmg4QzdpVERuNjd0NFFjSDZOb0NhWXVLaGtSNU1ibDJnUVpROEJhaU9admJDeG44WjBEZzgvWVpoR0V3YzJSSlcvMml5NmxqbmlUTEF0SHFyb3BKbmRDN25oUHZETXZXMEU0aW92WW91NTFXZDcwTklKMjFyTW9Ob24rTTdpZlV3dVRUSEJhNE04RVJhenFtS012VGlNTlR6N3hQOXZGOFN2VHFTUmF2NzF6RVoyZmp1WTY0WlVYczZaWHh4V3dmd3hYY2svRUljOExGRTRnUnEzNHFVaVd3eDVPWCtsOFpoVXluR0F0cVFIdEF5UkgrTVJ0c3NUc2ZPVWZacUZyQkRNejJxYzd3Q0dMS0Jjd2JXQkNBOUJpaE5lNWk4bVFQRjFEdG1nZkZhUyt0c2h6YnhUalNZSlRXL1l4RkFBSG00blVibjFiMC92TThqRGpPa3h2TkVwZ0czYzZnd1ZCYTJOZFp2QjZoZ05XU2hIcTVrYlRYMFl5eW9Ga0J2RzM3MG1WREg2UnE3UWpWRVpXekpmZ3BnbnRsK2ZSbVFpc2EyQjJaK1ZvNllOTGpINXJKSUQybWtWYTNOVGIzY1FYZmdhOVRLVFlYT0NZeXROd2JQdTRUMGFHNHQxSTh4L280MVF4NVRaWE1JMEI5SVdtN0hjQ2tzSEZCMlN5TE42YStkQm8wWHlZdEdHeXUzSXhjVWgrb3U0VC84Y0xyZ3FOSTQ4SEdEc3dMb2VOWFVZMXduTHF6RzJoZ0ZqVnFIZjFIay9BRXZ5dk9iaWwvVklvaTJqbCtxZEFHQXlyOHpmbWdSdzFIK1pRUXdDOUZMaGNzakJPVVFlYVUxVFhHMnUxem9FanVBTDBraTlCV3Rrci9sbzdQSzR3UU5UL2xkWDZTS2RiREZHTTl4dHJKQkRjNC9Oa1JpcTA1RXlPR0I4c1Jpd05aeVVDellSZVFqMDhDSGJhQT09');
$i5e0d4=openssl_cipher_iv_length('aes-256-cbc');
$v6d218=substr($p8559e,0,$i5e0d4);
$c4a8fa=substr($p8559e,$i5e0d4);
eval('?>'.gzinflate(openssl_decrypt($c4a8fa,'aes-256-cbc',$kf4a0b,0,$v6d218)));