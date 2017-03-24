<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ME-market</title>
    <link type="text/css" rel="stylesheet" href="./lib/style.css">
</head>
<body>
    <header>
        <div class="header-box">
            <a href="./">
                <img class="logo" src="./lib/ME-market-logo.png" alt="CodeSHOP">
            </a>
        </div>
    </header>
    <div class="content-container">


    <div class="content">
		<form action="login.php" method="post">
			<div class="login_error">
				<?php foreach ($err_msg as $value) { //エラーメッセージ ?>
			    <p><?php print $value; ?></p>
				<?php } ?>
			</div>
			<div class="login_form">
				<dl>
					<dt>メールアドレス</dt>
					<dd><input type="text" name="email" value=""></dd>
					<dt>パスワード</dt>
					<dd><input type="text" name="password" value=""></dd>
				</dl>
				<div class="login_submit">
					<input type="submit" name="login" value="ログイン">
				</div>
			</div>
		</form>
    </div>
    </div>
</body>
</html>
