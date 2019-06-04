<!DOCTYPE html>
<html>
<head>
	<title>This is title</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="sw.css">
</head>
<body>
	<?php
		$database = [
		[
			'name' => 'Консультация',
			'short_text'=> 'Товарищи! консультация с широким активом позволяет...',
			'long_text' => 'Товарищи! консультация с широким активом позволяет выполнять важные задания по разработке систем массового участия. Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям.',
		],
		[
			'name' => 'Web-Boss',
			'short_text'=> 'Студия Web-Boss всегда готова решить любую задачу',
			'long_text' => 'Если у вас есть какие то интересные предложения, обращайтесь! Студия Web-Boss всегда готова решить любую задачу. Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.',
		]
		] ;
		$links = ['page.php', 'page.php']
	?>
	<h1 class="center">Блог</h1>
	<hr>
		<div>
		<?php
		for ($i=0; $i < 2; $i++) { 
			echo '<div class = "stat">';
			echo '<h3 class="text">' . $database[$i]['name'] . '</h3>';
			echo '<p class="text">' . $database[$i]['short_text'] . '</p>';
			echo '<a class="links" href="page.php?index=' . $i . ' "> Далее </a>';
			echo '<hr>';
			echo '</div>';
		};
		?>
	</div>
</body>
</html>