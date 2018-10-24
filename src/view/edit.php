<?php
function render_template(string $id, string $name, string $username, string $email, string $address, string $phoneNumber) {
  return <<<HTML

<!DOCTYPE html>
<html>
<head>
  <link rel='stylesheet' href='src/view/static/css/common.css'>
  <link rel='stylesheet' href='src/view/static/css/main.css'>
  <link rel='stylesheet' href='src/view/static/css/edit.css'>
  <script type='module' src='src/view/static/js/main.js'></script>
  <script type='module' src='src/view/static/js/profile.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Bungee+Shade' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Chathura' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Mono' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Kite+One" rel="stylesheet">
  <title>Profile</title>
</head>
<body>
	<div class='main-page-container'>
    <div class='main-header-container'>
      <div class='main-header-top-container'>
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
        <div class='main-misc-container'>
          <div class='main-greeting-container'>
            <h5>Hi, {$username}!</h5>
          </div>
          <div id='logoutButtonContainer' class='main-logout-button-container'>
            <form id='logoutForm' action='/logout' method='get'></form>
            <button id="logoutButton" class='main-logout-button' type='submit' form='logoutForm'>
              <div id="logoutButtonIcon" class='main-logout-button-icon'></div>
            </button>
          </div>
        </div>
      </div>
      <div class='main-header-bottom-container'>
        <div id='browseTab' class='main-menu-tab'>
          <h3>Browse</h3>
        </div>
        <div id='historyTab' class='main-menu-tab tab-mid'>
          <h3>History</h3>
        </div>
        <div id='profileTab' class='main-menu-tab tab-selected'>
          <h3>Profile</h3>
        </div>
      </div>
    </div>
    <div class='main-content-container'>

      <div class='profile-main-container'>
        <div class='profile-main-left-container'></div>
        <div class='profile-main-center-container'>
          <div class='profile-main-image-container'>
            <img class='profile-picture' src='src/view/static/img/jokowi.jpg' alt='Profile Picture' height='200' width='200'>
          </div>
          <h2 class='profile-main-name'>{$name}</h2>
        </div>
        <div class='profile-main-right-container'>
          <div class='profile-main-button-container'>
            <form id='editProfileForm' action='/profile/edit' method='get'></form>
            <button id='editProfileButton' class='profile-edit-button' type='submit' form='editProfileForm'>
              <div id='editProfileButtonIcon' class='profile-edit-button-icon'></div>
            </button>
          </div>
        </div>
      </div>

      <div class='profile-detail-container'>
        <div class='profile-detail-title-container'>
          <h2 class='profile-detail-title'>My Profile</h2>
        </div>
        <div class='profile-detail-content-container'>
          <div class='profile-detail-content-row-container'>
            <div class='profile-detail-content-row-label-container'>
              <img class='profile-detail-content-row-label-icon' src='src/view/static/img/icon_username.svg' alt='Username icon'>
              <p class='profile-detail-content-row-label'>Username</p>
            </div>
            <div class='profile-detail-content-row-content-container'>
              <p class='profile-detail-content-row-content'>{$username}</p>
            </div>
          </div>
          <div class='profile-detail-content-row-container'>
            <div class='profile-detail-content-row-label-container'>
              <img class='profile-detail-content-row-label-icon' src='src/view/static/img/icon_email.svg' alt='Email icon'>
              <p class='profile-detail-content-row-label'>Email</p>
            </div>
            <div class='profile-detail-content-row-content-container'>
              <p class='profile-detail-content-row-content'>{$email}</p>
            </div>
          </div>
          <div class='profile-detail-content-row-container'>
            <div class='profile-detail-content-row-label-container'>
              <img class='profile-detail-content-row-label-icon' src='src/view/static/img/icon_address.svg' alt='Address icon'>
              <p class='profile-detail-content-row-label'>Address</p>
            </div>
            <div class='profile-detail-content-row-content-container'>
              <p class='profile-detail-content-row-content'>{$address}</p>
            </div>
          </div>
          <div class='profile-detail-content-row-container'>
            <div class='profile-detail-content-row-label-container'>
              <img class='profile-detail-content-row-label-icon' src='src/view/static/img/icon_phone.svg' alt='Phone Number icon'>
              <p class='profile-detail-content-row-label'>Phone Number</p>
            </div>
            <div class='profile-detail-content-row-content-container'>
              <p class='profile-detail-content-row-content'>{$phoneNumber}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</body>
</html>

HTML;
}