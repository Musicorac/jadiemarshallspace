<html>
<head>	
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="PapaParse/papaparse.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JavaScript Quiz Showcase</title>
</head>
<body>
<header>
	<?php include 'header.php';?>
</header>
<div class="body">
	<div class="grid">
		<div id="quiz">
			<h1>JavaScript Quiz, Nerd Edition</h1>
			
			<h3 id="question"></h3>
			
			<div class="answers">
				<button id="btn0"><span id="choice0"></span></button>
				<button id="btn1"><span id="choice1"></span></button>
				<button id="btn2"><span id="choice2"></span></button>
				<button id="btn3"><span id="choice3"></span></button>
			</div>
			
			<div class="foot">
				<h3 id="progress">Question x of y</h3>
			</div>
		</div>
	<a href="projects.php"><button class="accordion">Back to Projects</button></a>

	</div>

</div>
<footer>
	<?php include 'footer.php';?>
	<script src="quiz.js"></script>
</footer>
</body>
</html>