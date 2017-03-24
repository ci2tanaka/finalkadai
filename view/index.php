<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ME-market</title>
    <link type="text/css" rel="stylesheet" href="./lib/style.css">
  </head>
  <body>
    <header>
      <div class="header-box">
        <div class="header-box_upside">
        <a href="./">
         <img class="logo" src="./lib/ME-market-logo.png" alt="ME-market">
        </a>
        <form method="post">
          <dl class="search">
		       <dt><input type="text" name="text-field" value="" placeholder="キーワードで検索" /></dt>
		        <dd><button><span></span></button></dd>
	        </dl>
          <input type="hidden" name="search" value="keyword_search">
        </form>
        </div>
        <div class="header-box_downside">

          <div class="category">

          </div>
        <!--<div class="category">
          <form method="post">
            <dl class="department">
  		       <dt></dt>
  		        <dd>内視鏡外科</dd>
              <dd>脳外科</dd>
              <dd>心臓血管外科</dd>
  	        </dl>
            <input type="hidden" name="search" value="department_search">
          </form>
        </div>-->
        <?php if(check_login()) { ?>
        <a href="logout.php" class="menu">ログアウト</a>
        <a href="cart.php" class="menu">カート</a>
        <p class="menu"><?php print $_SESSION['LOGIN']['name']; ?>さん<img class="default-user_img" src="./lib/default.jpg"></p>
        <?php } else { ?>
        <a href="regist.php" class="menu">会員登録</a>
        <a href="login.php" class="menu">ログイン</a>
        <?php } ?>
        </div>
      </div>
    </header>
    <div class="content-container">
    <div class="content">
		<?php if (!empty($result_msg)) { //結果メッセージ ?>
        <p class="msg"><?php print $result_msg; ?></p>
		<?php } ?>
		<?php foreach ($err_msg as $value) { //エラーメッセージ ?>
	    <p><?php print $value; ?></p>
		<?php } ?>
        <ul class="item-list">
			<?php foreach ($data as $value)  { ?>
            <li>
                <div class="item">
                    <form action="./" method="post">
                        <img class="item-img" src="<?php print IMG_DIR; ?>p<?php print $value['id']; ?>.jpg" >
                        <div class="item-info">
                            <span class="item-name"><?php print $value['name']; ?></span>
                            <span class="item-price">¥<?php print $value['price']; ?></span>
                        </div>
						<?php if ($value['stock'] > 0) { ?>
						    <input class="cart-btn" type="submit" value="カートに入れる">
						<?php } else { ?>
						    <p class="sold-out" >売り切れ</p>
						<?php } ?>
                        <input type="hidden" name="item_id" value="<?php print $value['id']; ?>">
                        <input type="hidden" name="mode" value="insert_cart">
                    </form>
                </div>
            </li>
			<?php } ?>
        </ul>
    </div>
    <button class="exhibit_button"><a href="exhibit.php" class="exhibit">出品する</a></button>
    </div>
  </body>
</html>
