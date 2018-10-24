<?php
function render_template(int $errorCode, string $errorMessage) {
  return <<<HTML

<!DOCTYPE html>
<html>
<head>
  <link rel='stylesheet' href='src/view/static/css/common.css'>
  <link rel='stylesheet' href='src/view/static/css/main.css'>
  <link rel='stylesheet' href='src/view/static/css/error.css'>
  <script type='module' src='src/view/static/js/error.js'></script>
  <link href='https://fonts.googleapis.com/css?family=Bungee+Shade' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Chathura' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Mono' rel='stylesheet'>
  <title>Not Found</title>
</head>
<body>
	<div class='main-page-container'>
    <div class='main-header-container'>
      <div id='titleContainer' class='main-title-container'>
        <div class='main-title-zstack'>
          <h1 id='titleShadow' class='main-title-shadow'>PRO-BOOK</h1>
        </div>
        <div class='main-title-zstack'>
          <h1 id='titleBackground' class='main-title-background'>PRO-BOOK</h1>
        </div>
        <div class='main-title-zstack'>
          <h1 id='titleText' class='main-title-text'><span class='main-title-text-first'>PRO</span>-BOOK</h1>
        </div>
      </div>
    </div>
    <div class='main-content-container'>
      <p class='error-code'>{$errorCode}</p>
      <p class='error-message'>{$errorMessage}</p>
    </div>
	</div>
</body>
</html>

HTML;
}
