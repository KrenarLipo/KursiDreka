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
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- End carousel inner -->
  </div><!-- End carousel -->
</div><!-- End container fluid -->

<?php include "footer.php";?>
