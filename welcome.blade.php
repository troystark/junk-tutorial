<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title></title>
	<link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/fixed.css">
	<style>
	.todaysdeals .card-header
	{
		width: 100%;
 		 height: 180px;
  		background-image: url('/img/generic.png');
  		background-position: 0% 30%;
		background-size: cover;
		
		font-weight: 900;
		font-size: 1.75rem;
		text-shadow: 2px 1px black;
		color:white;
		  text-transform: uppercase;
		  text-align: center;
		  padding: 3.5rem 0;

	}	


		

	</style>

</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<div id="home">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="/">drinks and apps</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Another Day</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Advanced</a></li>
			</ul>
		</div>
	</nav>
</div>

<div class="landing"  >
	<div class="home-inner" >		
		<div class="caption text-center">
			<h1>Drinks and Apps</h1>
			<h3>View daily specials from your favorite restaurants</h3>
			<a class="btn btn-outline-light btn-lg" href="#todaysdeals">Today's Deals</a>
		</div>	
	</div>
</div>


<div id="region">
	<div class="col-12 narrow text-center" >
		<h1>Currently only available in Kitchener-Waterloo</h1>
		<p class="lead">I want to add more cities</p>
	</div>
	<div class="row text-center mb-4">
		<div class="col-md-4">
			<div class="feature">
				<i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-3 up-5"></i>
				<h3>Restaurants</h3>
				<p>View specials by restaurants</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="feature">
				<i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-3 up-5"></i>
				<h3>Restaurants</h3>
				<p>View specials by restaurants</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="feature">
				<i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-3 up-5"></i>
				<h3>Restaurants</h3>
				<p>View specials by restaurants</p>
			</div>
		</div>
	</div>
</div>


<div id="about">
	<div class="fixed-background" >
		<div class="row dark">
			<div class="col-md-6">
				<h3>About Drinks and Apps</h3>
				<p>Drinks and Apps is an easy way to find deals and specials from your local restaurants and bars</p>
			</div>
			<div class="col-md-6">
				<img src="/img/about-content.png" style="width:90%">
			</div>
		</div>
		<div class="fixed-wrap" >
			<div class="fixed"></div>
		</div>
	</div>	

</div>



<!-- restaurant specials-->

<div id="todaysdeals" class="container-fluid todaysdeals">
	<div class="row">
@forelse($deals as $restaurant)

		<div class="col-md-4">
			<div class="card">
				<div class="card-header">{{$restaurant->name}}</div>
				
			<div class="collapse" id="collapse{{$restaurant->id}}">
				<div class="card-body">
	@forelse($restaurant->deal as $deal)
			{{$deal->name}}<br>
	@empty
			No deals found
		
	@endforelse
			</div>
			</div>

			<div class="card-footer"> 
			<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse{{$restaurant->id}}" aria-expanded="false" aria-controls="collapse{{$restaurant->id}}">
					Details
				</button>
				<i class="fas fa-map-marker-alt" style="float:right;font-size:2.25rem;padding-left:5px"></i> 
				<i class="fas fa-phone-square" style="float:right;font-size:2.25rem;padding-left:5px"></i>  
				<i class="fas fa-home" style="float:right;font-size:2.25rem;padding-left:5px"></i>  
			</div>
		</div>
	</div>
    

@empty
	<div class="col"><p>No deals found</p></div>
@endforelse
	</div>


	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Restaurant Name</div>
				<div class="card-body">
					<p>
						$5 Wine<br>
						$6 Domestic Beer<br>
					</p>


				</div>
				<div class="card-footer"> 
					<i class="fas fa-map-marker-alt"></i>Map 
					<i class="fas fa-phone-square"></i>Phone  
					<i class="fas fa-home"></i>Website 
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" >
				<div class="card-header">White Rabbit</div>
				<div class="card-body">$15 Bowl of Ramen and a Sapporo</div>
				<div class="card-footer"> 
					<i class="fas fa-map-marker-alt"></i>Map 
					<i class="fas fa-phone-square"></i>Phone  
					<i class="fas fa-home"></i>Website 
				</div>
			</div>
		</div>	
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Death Valley's Little Brother</div>
				
				<div class="collapse" id="collapseExample">
					<div class="card-body">Content</div>
				</div>

				<div class="card-footer"> 
				<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						Details
					</button>
					<i class="fas fa-map-marker-alt" style="float:right;font-size:2.25rem;padding-left:5px"></i> 
					<i class="fas fa-phone-square" style="float:right;font-size:2.25rem;padding-left:5px"></i>  
					<i class="fas fa-home" style="float:right;font-size:2.25rem;padding-left:5px"></i>  
				</div>
			</div>
		</div>
	<!--</div>

	<div class="row">-->
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Restaurant Name</div>
				<div class="card-body">Content</div>
				<div class="card-footer">Footer</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" >
				<div class="card-header">Restaurant Name</div>
				<div class="card-body">Content</div>
				<div class="card-footer">Footer</div>
			</div>
		</div>	

	</div>
</div>

<!-- /end restaurant specials-->

</body>

<div id="footer" >
<footer>
<div class="row justify-content-center">
	<p>&copy; Drinks and Apps</p>
</div>

</footer>
</div>






</div>

<!--- Script Source Files -->
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.12.0/js/all.js"></script>

<!--- End of Script Source Files -->


</html>



