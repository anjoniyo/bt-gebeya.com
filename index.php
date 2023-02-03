<!-- connect file --> 
<?php
include('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>BT Gebeya</title>
        <!-- bootsrap CSS link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
crossorigin="anonymous">
        <!-- font awesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" />
        <!-- css file -->
    <link rel="stylesheet" href="style.css"> 
    <style>
    .Logo{
    width: 20%;
    height: 15%;
}
    * {
margin: 0;
padding: 0;
box-sizing: border-box;
}
    .admin_image{
    width: 200px;
    object-fit:contain;
}
.card-img-top{
    width: 100%;
    height: 100%;
    object-fit:contain;
}

</style>    
 <?php
//namespace Phppot;

//require_once ("./Model/NewsLetter.php");
use Phppot\DataSource;
//$newsLetter = new NewsLetter();
//$result = $newsLetter->getAllRecords();
?>
<html lang="<?php echo $lang; ?>">
<head>
<title>How to Enable Multi-language Support to Website using PHP</title>
<link href='./assets/css/phppot-style.css' rel='stylesheet'
    type='text/css' />
<link href='./assets/css/multi-lingual-page.css' rel='stylesheet'
    type='text/css' />
</head>
<body>
    <div class="phppot-container">
<?php //require_once "./view/home.php"; ?> 
</div>
</body>
</html>
    </head>
<body>

<!-- navbar -->
<div class="container-fluid p-0">
<!-- first child -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid ">
    <img src="./images/logo.png" alt="" class="Logo" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
         </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
         </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
         </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
         </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <li class="nav-item">
          <a class="nav-link" href="#">About</a>
         </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#">Electronic devices</a></li>
        <li><a class="dropdown-item" href="#">Clothes </a></li>
        <li><a class="dropdown-item" href="#">Gym material</a></li>
        <li><a class="dropdown-item" href="#">Shoes for men & girl</a></li>
    <li><hr class="dropdown-divider"></li>  
    <li><a class="dropdown-item" href="#">something else here</a></li> </ul>   
</ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <form class="d-flex mb-5 me-5" >
      <input class="form-level " type="search" placeholder="Search" aria-label="Search">&nbsp;&nbsp;
        
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="admin_area">Welcome Guest</a></li>
          <li class="nav-item">
          <a class="nav-link" href="#">Login</a></li>
        </ul>
</nav>
<!-- third child -->
<div class="bg-light">
<h3 class="text-center"> Online shopping website</h3>
<p class="text-center">............ </p>
</div>
<!-- fourth child -->
<div class="row">
    <div class="col-md-8">
        <!-- products -->
        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card" >
  <img src="./images/phone.jpg"alt="..." class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Samsung </h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-dark">View more</a>
  </div>
</div></div>
            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="./images/cloth.jpg" class="card-img-top" alt="" class="cloth" >
  <div class="card-body">
    <h5 class="card-title">Clothes</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-dark">View more</a>  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="./images/shoes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Shoes</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-dark">View more</a>  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="./images/phone1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">phone</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-dark">View more</a> </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="./images/phone1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">phone</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-dark">View more</a>  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="./images/phone1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">phone</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-dark">View more</a>  </div>
</div>
            </div>
        </div> 
    </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-md-2  bg-secondary p-0 ">
    <!-- brands to be displayed -->
    <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
<a href="#" class="nav-link text-light"><h4>Delivery brands</h4></a>
</li>
<?php
$select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
echo "<li class='nav-item'>
<a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a></li>";
}
?>
</ul>
<!-- categories to be displayed -->
<ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
<a href="#" class="nav-link text-light"><h4>Categories</h4></a>
</li> 
<?php
$select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);
//$row_data=mysqli_fetch_assoc($result_categories);
//echo $row_data['category_title'];
//echo $row_data['category_title'];
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
echo "<li class='nav-item'>
<a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a></li>";
}
?>
</ul>
<!-- fifth child -->
</div>
</div>

<!-- last child -->
<div class="bg-info p-3 text-center ">
    <p> © 2022 BT Gebeya Designed by <a href="https://www.facebook.com/BereketThom"> <b>Blessing Thom</b></a></p>

</div>
</div>
<!-- bootsrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
crossorigin="anonymous"></script>    
</body>
</html>