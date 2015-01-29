<?php
class MojoAuth {

  public static function getAuth($id, $secret, $timeout = 86400) {
    $expiry = time() + $timeout;
    if ($id) {
      $username = $id . ':' . $expiry;
    } else {
      $username = $expiry;
    }

    $password = base64_encode(hash_hmac('sha1', $username, $secret));

    $result = array($username, $password);
    return $result;
  }
}
