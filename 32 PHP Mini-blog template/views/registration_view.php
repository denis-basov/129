<?php
	require 'components/header.php';
?>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-12 mb-5">

			<form action="" class="p-5 bg-white" method="POST" enctype="multipart/form-data">
				<h2 class="mb-5 text-center">Регистрация</h2>
				<div class="row form-group">
					<div class="col-md-6 mb-3 mb-md-0">
						<label class="text-black">Имя:</label>
						<input type="text" name="first_name" class="form-control"
                        placeholder="Только русские буквы от двух символов">
                        <span class="input-error">Введите имя</span>
					</div>
					<div class="col-md-6">
						<label class="text-black">Фамилия:</label>
						<input type="text" name="last_name" class="form-control"
                        placeholder="Только русские буквы от двух символов">
                        <span class="input-error">Введите фамилию</span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Логин</label>
						<input type="text" name="login" class="form-control">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Адрес электронной почты</label>
						<input type="email" name="email" class="form-control">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Пароль</label>
						<input type="password" name="password" class="form-control">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Аватар</label>
                        <input type="file" name="avatar" class="form-control">
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
