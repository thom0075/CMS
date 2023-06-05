<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap index</title>
        <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
		<script type="text/javascript" src="/jquery/jquery-3.7.0.min"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    </head>
	<body>
	<script type="text/javascript">
		
	</script>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

			<!--Website brand-->
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div class="navbar-nav">
				<a class="nav-item nav-link active" href="#">Home</a>
				<a class="nav-item nav-link" href="#">C++</a>
				<a class="nav-item nav-link" href="#">Python</a>
				<a class="nav-item nav-link" href="#">HTML5</a>
				<a class="nav-item nav-link active" href="#">YouTube</a>
				
				<div class="dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown link
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a><h5 class="dropdown-header">Topicms</h5></a>
						<a class="dropdown-item" href="#" nae="one" action="reqPage.php">one</a>
						<a class="dropdown-item" href="#" name="two">two</a>
						<a class="dropdown-item" href="#" name="three">three</a>
						<a class="dropdown-item" href="#" name="four">four</a>
					</div>
				</div>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col">
					1 of 3
				</div>
				<div class="col-8 gy-2">
					
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">

						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="data:image/jpeg;base64,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" alt="Firse Slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="https://www.fotonerd.it/wp-content/uploads/2020/11/fotonerd-migliori-pc-per-fotografia-feat.jpg" alt="Second Slide">
							</div>
						</div>

						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
							<span>Prev</span>
							<span class="carousel-control-prev-icon"></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
							<span>Next</span>
						</button>
					</div>
				</div>
				<div class="col">
					3 of 3
				</div>
			</div>
			<div class="row">
				<div class="col">
					1 of 3
				</div>
				<div class="col-8 gy-2>">
					2 of 3
					<p class="display-4">Display 4</p>
					<pre> <!--Here goes the content of the page-->
=ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae 
vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat 
voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
fugiat quo voluptas nulla pariatur?"
					</pre>
				</div>
				<div class="col">
					3 of 3
					<div class="card">
						<img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some card text</p>
							<a href="#" class="btn btn-danger">My channel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>