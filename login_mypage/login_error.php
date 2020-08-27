<?php

session_start();
if(isset($_SESSION['id'])){
	header("Lacation:mypage.php");
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>ログイン画面</title>
	<link rel="stylesheet" href="login_error.css">
</head>

<body>
	<header>
		<img src="4eachblog_logo.jpg">

		<div class="login"><a href="login.php">ログイン</a></div>
	</header>

	<main>
		<form action="mypage.php" method="post">

			<div class="form_contents">
				<div class="error">
					<p>メールアドレスまたはパスワードが間違っています。</p>
				</div>
				<div class="mail">
					<label>メールアドレス</label><br>
					<input type="text" name="mail" class="formbox" size="50" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
				</div>

				<div class="password">
					<label>パスワード</label><br>
					<input type="password" name="password" class="formbox" size="50" pattern="^[a-zA-Z0-9]{6,}$" required>
				</div>

				<div class="check">
					<input type="checkbox" name="checkbox" value="ログイン状態を保持する">ログイン状態を保持する
				</div>

				<div class="sousin">
					<input type="submit" value="ログイン" class="submit_button" size="30">
				</div>
			</div>

		</form>
	</main>
</body>

</html>
