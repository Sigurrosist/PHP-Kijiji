<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Welcome to KIJIJI</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- Start Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">KIJIJI</a> <!-- Need to set the address for this button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>


<div class="d-flex justify-content-end">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<!-- Start Home button (Current) -->
<li class="nav-item active">
<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<!-- Start Register button -->
<a class="nav-link" href="#">Register</a>
</li>
<li class="nav-item">
<!-- Start Post button -->
<a class="nav-link" href="#">Post</a>
</li>
<li class="nav-item">
<!-- Start Language button -->
<a class="nav-link" href="#">EN / FR</a>
</li>
<li class="nav-item">
<!-- Start Login button -->
<a class="nav-link" href="#">Log In</a>
</li>
</ul>
</div>
</div>
</nav>
<!--  Special Ads  -->
<a href="#"><h2 class="p-3">Special Ads </h2></a>
<div class="card-group">
<!-- First Card -->
<div class="card" style="width: 18rem;">
<img class="card-img-top" src="..." alt="Card image cap">
<div class="card-body">
<h5 class="card-title">Card title</h5>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<!-- Second Card -->
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    <!-- Third Card -->
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


<!-- divider -->

<div>
<p class = "display-4 text-center"> - - - </p>
</div>

<!-- divider end -->

<!-- Title   -->
<div class = "container p-3 mb-2 bg-light text-dark">
	<p class="h3 p-3 text-center"> Ad Title - Selling car for 6k Audi Good condition </p>
</div>
<!-- Title end-->

<!-- Info Table -->
<div class="container p-3">
  <table class="table">
    <tbody>
      <tr>
        <th>Price : </th>
        <td><?php // price ?></td>
        <th>Seller : </th>
        <td><?php // seller name?></td>
      </tr>
      <tr>
        <th>Address : </th>
        <td><?php // seller area ?></td>
        <th>Phone : </th>
        <td><?php // seller phone ?></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- Info Table end -->
<!-- Image display -->
<div class= "container text-center p-3 border border-success rounded">
  <a href="#" >
  <img src="<?php // source address?>" alt="Item thumbnail" class="img-thumbnail">
  </a>
  <a href="#" >
  <img src="<?php  // source address?>" alt="Item thumbnail" class="img-thumbnail">
  </a>
  <a href="#" >
    <img src="<?php // source address ?>" alt="Item thumbnail" class="img-thumbnail">
  </a>
</div>
<!-- Image display -->
<!-- Ad Body -->
<div class = "container p-3 mb-2 bg-light text-dark border border-success rounded">
okidoki This is the body article of the selling item
</div>
<!-- Ad Body end -->
<!-- Go back button -->
<div class="container p-3 text-center">
  <button type="button" class="btn btn-success">Go back to the items list</button> <button type="button" class="btn btn-primary">Message to the seller</button>
</div>
<!-- Go back button -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>
