<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') - EMed</title>
</head>
<body>
	<header></header>
	<main role="main" class="container">
		<div class="mainContent">
			@yield('content')
		</div>

		<div class="mainSidebar">
			@section('sidebar')
				<h2>This is the sidebar</h2>
			@show
		</div>
	</main>
	<footer></footer>
</body>
</html>