<?php include "header.php" ;?>
<div class="container-fluid">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img class="d-block w-100" src="img/slideOne.jpg" alt="First Slide">
      </div>
      <div class="item">
        <img class="d-block w-100" src="img/slideTwo.jpg" alt="Second Slide">
      </div>
      <div class="item">
        <img class="d-block w-100" src="img/slideThree.jpg" alt="Third Slide">
      </div>
      <!-- Shigjetat ndryshuese -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<i class="fas fa-arrow-left"></i>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<i class="fas fa-arrow-right"></i>
				</a>
      </div><!-- End carousel inner -->
    </div><!-- End carousel -->
  </div><!-- End container fluid -->

<!-- Lection seven form validation -->
<div class="clearfix"></div>
		<div class="container" style="margin-top:20px;">
			<div class="row">
				<div class="col-md-8">
					<h4>Left Side</h4>
					<form id="first_form" method="post" action="">
						<div>
							<label for="first_name">First Name</label>
							<input type="text" id="first_name" name="first_name"/>
						</div>
						<div>
							<label for="last_name">Last Name</label>
							<input type="text" id="last_name" name="last_name"/>
						</div>
						<div>
							<label for="email">Email</label>
							<input type="email" id="email" name="email" />
						</div>
						<div>
							<label for="password">Password</label>
							<input type="password" id="password" name="password" />
						</div>
						<div>
							<input type="submit" value="Submit" /> 
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<h4>Right Side</h4>
						<?php 
						  function emerFunksioni(){
							  return "something";
						  }
		  
		                echo "<br>".emerFunksioni();
	                    ?>
				</div>
			</div>
		</div>

<?php include "footer.php";?>

<!-- to be added in the functions.php -->
<script>
  function validateForm(){
	$("#first_form").submit(function(e){
		e.preventDefault();
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var email = $("#email").val();
		var pass = $("#password").val();
		
		$(".error").remove();
		
		if(first_name.length < 1){
			$('#first_name').after('<span class="error">This field is required</span>');
		}
		if(last_name.length < 1){
			$('#last_name').after('<span class="error">This field is required</span>');
		}
		if(email.length < 1){
			$('#email').after('<span class="error">This field is required</span>');
		}else{
			var regEx = /^[A-Z0-9][a-z0-9._%+-]{0,63}@(?:[A-Za-z0-9]{1,63}\.){1,125}[A-Za-z]{2,63}$/;
			/*var validEmail = regex.test(email);
			if(!validEmail){
				$('#email').after('<span class="error">Enter a valid email!</span>');
			}*/
		}
		if(pass.length < 8){
			$('#password').after('<span class="error">Password must be at least 8 characters!</span>');
		}
		
	});
	
}
</script>



