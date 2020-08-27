<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST["from_mypage"])){
	header("Location:http:login_error.php");
}


?>


<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>マイページ登録</title>
	<link rel="stylesheet" href="mypage_hensyu.css">
</head>

<body>
	<header>
		<img src="4eachblog_logo.jpg">
		<div class="logout"><a href="log_out.php">ログアウト</a></div>
	</header>

	<main>
		<div class="mypage_form">
			<h2>会員情報</h2>
			<div class="hello">
				<?php echo "こんにちは！" . $_SESSION['name'] . "さん";?>
			</div>
			<div class="profile_pic">
				<img src="<?php echo $_SESSION['picture'];?>">
			</div>
			<form action="mypage_update.php" method="post">
				<div class="basic_info">
					<p>氏名：<input type="text" name="name" size="30" value="<?php echo $_SESSION['name'];?>"></p>
					<p>メール：<input type="text" name="mail" size="30" value="<?php echo $_SESSION['mail'];?>"></p>
					<p>パスワード：<input type="text" name="password" size="30" value="<?php echo $_SESSION['password'];?>"></p>
				</div>

				<div class="comments">
					<textarea cols="60" rows="6" name="comments" placeholder="<?php echo $_SESSION['comments'];?>"></textarea>
				</div>
				<div class="henkou">
					<input type="submit" value="この内容に変更する" class="button1" size="30">
				</div>
			</form>

		</div>
	</main>


</body>

</html>
