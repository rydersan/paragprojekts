<html>
<head>
<title>Testa paraugprojekts</title>
</head>
<body>
	<div class="content">
		<p id="text"></p>
		<form action="index.php" method="post">
			<input type="text" name="saturs" placeholder="Ievadi tekstu...">	<br>
			<input type="submit" submit="submit" value=" Sūtīt Datus ">
		</form>
	</div>
</body>
</html>

<?php
function get() {
	echo { ?> <script>document.getElementById("text").innerHTML = "Paraugprojekts!";</script>
<?php }
if(isset($_GET['load'])) {
  get();
}
?>