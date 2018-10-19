<?php
class LoginController implements ControllerInterface {
  public static function control(Request $request) {
    $db = new MarufDB($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
    $user_id = $db->checkLogin($request->username, $request->password);
    if($user_id != -1) {
      $JKWToken = new JKWToken();
      $token = $JKWToken->generateJKWToken();
      if ($db->addToken($user_id, $token) == 1) {
        setcookie("token", $token, time() + (int)$_ENV['COOKIE_EXPIRED_TIME'], '/');
        header("Location: http://{$_ENV['SERVER_NAME']}:{$_ENV['SERVER_NAME']}/");
  exit();
      } else {
        return '<h1>Failed</h1>';
      }
    } else {
      $template = new Template('src/view/login.php');
      return $template->render(True);
    }
  }
}
