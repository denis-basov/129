<footer>
	<h3>Подвал сайта</h3>
	<nav>
            <?php
			foreach ($nav as $link => $desc){
				echo "<a href='$link'>$desc</a>";
			}
			?>
	</nav>
</footer>

</body>
</html>
