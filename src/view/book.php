<?php
function render_template(string $username, $book, $reviews) {
  $reviewsHTML = '';
  $bookId = $book['id'];
  $bookImagePath = "src/model/books/".$bookId.".jpg";

  foreach($reviews as $review) {
    $profileImagePath = "src/model/profile/7.jpg";
    $reviewHTML = <<<HTML

<div class='book-review-item-container'>
  <div class='book-review-item-left-container'>
    <div class='book-review-item-profile_image-container'>
      <img class='book-review-item-profile_image' src='{$profileImagePath}'>
    </div>
  </div>
  <div class='book-review-item-center-container'>
    <h4 class='book-review-item-username'>@{$review['username']}</h4>
    <p class='book-review-item-text'>{$review['comment']}</p>
  </div>
  <div class='book-review-item-right-container'>
    <div class='book-review-rating-content'>
      <img src='' alt='Star Image'>
      <p class='book-review-rating'>{$review['rating']}.0 / 5.0</p>
    </div>
  </div>
</div>

HTML;
    $reviewsHTML = $reviewsHTML . $reviewHTML;
  }

  return <<<HTML

<!DOCTYPE html>
<html>
<head>
  <link rel='stylesheet' href='src/view/static/css/common.css'>
  <link rel='stylesheet' href='src/view/static/css/main.css'>
  <link rel='stylesheet' href='src/view/static/css/book.css'>
  <script type='module' src='src/view/static/js/main.js'></script>
  <script type='module' src='src/view/static/js/book.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Bungee+Shade' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Chathura' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Mono' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Kite+One" rel="stylesheet">
  <title>Browse</title>
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
        <div id='browseTab' class='main-menu-tab tab-selected'>
          <h3>Browse</h3>
        </div>
        <div id='historyTab' class='main-menu-tab tab-mid'>
          <h3>History</h3>
        </div>
        <div id='profileTab' class='main-menu-tab'>
          <h3>Profile</h3>
        </div>
      </div>
    </div>
    <div class='main-content-container'>
      <div class='book-content-container'>

        <div class='book-detail-container'>

          <div class='book-detail-left-container'>
            <h3 class='book-detail-title'>{$book['title']}</h3>
            <h4 class='book-detail-author'>{$book['author']}</h4>
            <p class='book-detail-synopsis'>{$book['synopsis']}</p>
          </div>

          <div class='book-detail-right-container'>
            <div class='book-detail-right-content-container'>
              <div class='book-detail-image-container'>
                <img class='book-detail-image' src='{$bookImagePath}'>
              </div>
              <div class='book-detail-stars-container'>
                <div class='book-detail-review-stars'>
                  huyu buat bintang gimane caranya
                </div>
              </div>
              <div class='book-detail-rating-container'>
                <h4 class='book-detail-rating'>{$book['rating']} / 5.0</h4>
              </div>
            </div>
          </div>

        </div>

        <div class='book-order-container'>
          <div class='book-order-title-container'>
            <h3 class='book-order-title'>Order</h3>
          </div>
          <div class='book-order-dropdown-container'>
            <h4 class='book-order-dropdown-label'>Amount: </h4>
            <select id='orderQuantitySelector' name='orderQuantity'>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
              <option value='4'>4</option>
              <option value='5'>5</option>
              <option value='6'>6</option>
              <option value='7'>7</option>
            </select>
          </div>
          <div class='book-order-button-container'>
            <input hidden id='bookIdField' value={$bookId}>
            <button id='orderButton' class='book-order-button'>
              <div class='book-order-button-inner'>
                ORDER
              </div>
            </button>
          </div>
        </div>

        <div class='book-review-container'>
          <div class='book-review-title-container'>
            <h3 class='book-review-title'>Review</h3>
          </div>
          <div class='book-review-content-container'>
            {$reviewsHTML}
          </div>
        </div>

      </div>

    </div>
	</div>
</body>
</html>

HTML;
}
