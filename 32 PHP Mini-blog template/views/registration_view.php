<?php
	require 'components/header.php';
?>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-12 mb-5">

			<form action="" class="p-5 bg-white">
				<h2 class="mb-5 text-center">Регистрация</h2>
				<div class="row form-group">
					<div class="col-md-6 mb-3 mb-md-0">
						<label class="text-black">Имя:</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-6">
						<label class="text-black">Фамилия:</label>
						<input type="text" class="form-control">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Логин</label>
						<input type="text" class="form-control">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Адрес электронной почты</label>
						<input type="email" class="form-control">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Пароль</label>
						<input type="password" class="form-control">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Сообщение</label>
						<textarea name="message" cols="30" rows="7" class="form-control" placeholder="Напишите ваш текст здесь..."></textarea>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="submit" value="Отправить" class="btn btn-primary py-2 px-4 text-white">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
	require 'components/footer.php';
?>
