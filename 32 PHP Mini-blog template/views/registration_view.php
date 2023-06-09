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
                        placeholder="Только русские буквы от двух символов"
                        value="<?=$input['first_name'] ?? ''?>">
                        <span class="input-error"><?=$errors['first_name'] ?? '' ?></span>
					</div>
					<div class="col-md-6">
						<label class="text-black">Фамилия:</label>
						<input type="text" name="last_name" class="form-control"
                        placeholder="Только русские буквы от двух символов"
                        value="<?=$input['last_name'] ?? ''?>">
                        <span class="input-error"><?=$errors['last_name'] ?? ''?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Логин</label>
						<input type="text" name="login" class="form-control"
                        placeholder="Только латиница и цифры, первая буква, не короче двух символов"
                        value="<?=$input['login'] ?? ''?>">
                        <span class="input-error"><?=$errors['login'] ?? ''?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Адрес электронной почты</label>
						<input type="email" name="email" class="form-control"
                        placeholder="example@email.ru"
                        value="<?=$input['email'] ?? ''?>">
                        <span class="input-error"><?=$errors['email'] ?? ''?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Пароль</label>
						<input type="password" name="password" class="form-control"
                        placeholder="Не менее шести произвольных символов"
                        value="<?=$input['password'] ?? ''?>">
                        <span class="input-error"><?=$errors['password'] ?? ''?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<label class="text-black">Аватар</label>
                        <input type="file" name="avatar" class="form-control">
                        <span class="input-error"></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="submit" value="Зарегистрироваться" class="btn btn-primary py-2 px-4 text-white">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
	require 'components/footer.php';
?>










