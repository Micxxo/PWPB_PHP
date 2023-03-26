<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login</title>
		<script src="https://cdn.tailwindcss.com"></script>
	</head>
	<body class="flex justify-center items-center h-screen bg-[#E3E3E3]">
		<div class="card shadow-lg rounded-md bg-[#F5F5F5] p-5">
			<form method="POST" action="login.php">
			<h1 class="text-center font-bold text-2xl ">Login</h1>
			<div class="usn flex items-center gap-3 mt-4">
				<label for="usn">Username</label>
				<input type="text" name="username" id="usn" class="rounded-md px-2 border-2 border-black" />
			</div>
			<div class="pass flex items-center gap-3 mt-4">
				<label for="pass">Password</label>
				<input type="password" name="password" id="pass" class="rounded-md px-2 border-black border-2" />
			</div>
			<button class="w-full mt-4 rounded-md bg-red-400 p-2 text-white" type="submit">Submit</button>
			</form>
		</div>
	</body>
</html>
