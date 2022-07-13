<?php
    echo $this->Html->css('index');
	echo $this->Html->css('reset');
	echo $this->Html->css('cafee/index');
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>サイトタイトル</title>
		<meta name="description" content="サイトキャプションを入力">
		<meta name="keywords" content="サイトキーワードを,で区切って入力">
		<script src="sample.js"></script>
		<?= $this->Html->script('/js/vue.js') ?>
		<?= $this->Html->script('/js/cafee.js') ?>
	</head>
	<body>
		
		<!----- メインコンテンツ ----->
			<div class="side-class">
				<p class="impact-font">smoking<br>cafee</p>
				<nav class="side-nav">
					<ul>
						<li>
							<a href="" class="side-a">news</a>
						</li>
						<li>
							<a href="" class="side-a">cigarette</a>
						</li>
						<li>
							<a href="" class="side-a">cofee</a>
						</li>
						<li>
							<a href="" class="side-a">contact</a>
						</li>
					</ul>
				</nav>
				
			</div>
			<div id="canvas" class="main">
			<?php echo $this->Html->image("cafee.jpeg",['class' => 'img']); ?>
			</div>

		<!----- メインコンテンツ END ----->

	</body>
</html>