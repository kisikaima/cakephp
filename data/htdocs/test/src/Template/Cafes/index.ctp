<?php
    echo $this->Html->css('index');
	echo $this->Html->css('reset');
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>サイトタイトル</title>
		<meta name="description" content="サイトキャプションを入力">
		<meta name="keywords" content="サイトキーワードを,で区切って入力">
		<link rel="stylesheet" href="sample.css">
		<script src="sample.js"></script>
		<?= $this->Html->script('/js/vue.js') ?>
	</head>
	<body>
		<!----- ヘッダー ----->
		<?php
			echo $this->element('flash/cafes/header');
		?>
		<!----- ヘッダー END ----->
		
		<!----- メインコンテンツ ----->
		<div>
			<div>
				
			</div>

		</div>
		<!----- メインコンテンツ END ----->
		
		<!----- フッター ----->
		<footer>フッター</footer>
		<!----- フッター END ----->
		<div id="app">
  			{{ message }}
		</div>

		<script>
		var app = new Vue({
			el: '#app',
			data: {
				message: 'Hello Vue!'
			}
		})
		</script>
	</body>
</html>