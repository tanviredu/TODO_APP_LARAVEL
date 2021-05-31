<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>todos application</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Todos application</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
        
      <li class="nav-item">
        <a class="nav-link " href="/new-todos">Create Todos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/todos">All Todos</a>
      </li>
    </ul>

    
  </div>
</nav>





	<div class="container">

		@yield("content")


	</div>

</body>
</html>
