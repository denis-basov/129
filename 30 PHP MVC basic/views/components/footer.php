<footer>
	<h3><?= $title ?? 'Сайт с новостями';?></h3>

    <nav>
      <?php foreach($menu as $key => $value):?>
          <a href="<?=$key?>"><?=$value?></a>
      <?php endforeach;?>
    </nav>
</footer>
</body>
</html>
