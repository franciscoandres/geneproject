<?php 

require_once 'Initialization.php';

if (Request::is_post()) {

	$validate = new Validator();
	$validate->presence_on(["name", "email", "password"]);

	if ($errors = $validate->errors()) {
		foreach ($errors as $error) {
			echo "<p>" . $error . "</p>";
		}
	}else{
		$user = new User();
		$user->setName(Input::get("name"));
		$user->setEmail(Input::get("email"));
		$user->setPassword(Input::get("password"));
		$user->save();
		Request::redirect_to("./index.php");
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="." method="POST">
		<input type="text" name="name" placeholder="Name">
		<input type="text" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Password">
		<input type="submit">
	</form>
</body>
</html>