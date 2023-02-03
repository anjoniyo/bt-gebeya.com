<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    
     $product_title=$_POST['product_title'];
     $product_description=$_POST['product_description'];
     $product_keyword=$_POST['product_keyword'];
     $product_category=$_POST['product_category'];
     $product_brands=$_POST['product_brands'];
     $product_price=$_POST['product_price'];
     $product_status='true';
 //accessing image
 $product_image1=$_FILES['product_image1']['name'];
 $product_image2=$_FILES['product_image2']['name'];
 $product_image3=$_FILES['product_image3']['name'];

 //accessing image temporary name
 $temp_image1=$_FILES['product_image1']['tmp_name'];
 $temp_image2=$_FILES['product_image2']['tmp_name'];
 $temp_image3=$_FILES['product_image3']['tmp_name'];

 // checking empty condition
 if($product_title=='' or $product_description=='' or $product_keyword=='' or $product_category=='' 
     or $product_brands=='' or  $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
        echo "<script>alert('please fill all the available fields')</script>";
        exit();
     } else{
        move_uploaded_file( $temp_image1,"./product_images/$product_image1");
        move_uploaded_file( $temp_image2,"./product_images/$product_image2");
        move_uploaded_file( $temp_image3,"./product_images/$product_image3");

        //insert query
        $insert_products="insert into `products` (product_title,product_description,product_keyword,category_id,brand_id,product_image1,product_image2,	product_image3,
        product_price,date,status) values ('$product_title','$product_description','$product_keyword','$product_category',
        '$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
        $result_query=mysqli_query($con,$insert_products);
        echo "<script>alert('Successfully inserted the products')</script>";
     }
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <!-- bootsrap css link -->
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
<link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
    <!-- form -->
 <form action="" method="post" enctype="multipart/form-data"></form>
      <!-- title -->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-label">Product title</label>
         <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required" >
      </div>
     <!-- description -->
     <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_description" class="form-label">Product description</label>
         <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required" >
     </div>
     <!-- keyword -->
     <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keyword" class="form-label">Product keyword</label>
         <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter product keyword" autocomplete="off" required="required" >
     </div>
     <!-- categories -->
     <div class="form-outline mb-4 w-50 m-auto">
      <select name="product_category" id="" class="form-select">
        <option value="">Select a category</option>
        <?php
             $select_query="Select * from `categories`";
             $result_query=mysqli_query($con,$select_query);
             while($row=mysqli_fetch_assoc($result_query)){
                 $category_title=$row['category_title'];
                 $category_id=$row['category_id'];
                 echo "<option value='$category_id'>$category_title</option>";
             }
        ?> 
       <!-- <option value="">Category1</option>
        <option value="">Category2</option>
        <option value="">Category3</option>
        <option value="">Category4</option>
        <option value="">Category5</option> -->
      </select>  
    </div>
         <!-- brands -->
         <div class="form-outline mb-4 w-50 m-auto">
      <select name="product_brands" id="" class="form-select">
        <option value="">Select a Brands</option>
        <?php
             $select_query="Select * from `brands`";
             $result_query=mysqli_query($con,$select_query);
             while($row=mysqli_fetch_assoc($result_query)){
                 $brand_title=$row['brand_title'];
                 $brand_id=$row['brand_id'];
                 echo "<option value='$brand_id'>$brand_title</option>";
             }
        ?>
       <!--  <option value="">Brand1</option>
        <option value="">Brand2</option>
        <option value="">Brand3</option>
        <option value="">Brand4</option>
        <option value="">Brand5</option> -->
      </select>  
    </div>
    <!-- Image 1 -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image1" class="form-label">Product image 1</label>
         <input type="file" name="product_image1" id="product_image1" class="form-control" required="required" >
     </div>
     <!-- Image 2 -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image2" class="form-label">Product image 2</label>
         <input type="file" name="product_image2" id="product_image2" class="form-control" required="required" >
     </div>
     <!-- Image 3 -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image3" class="form-label">Product image 3</label>
         <input type="file" name="product_image3" id="product_image3" class="form-control" required="required" >
     </div>
     <!-- price -->
     <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_price" class="form-label">Product Price</label>
         <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required" >
     </div>
     <!-- price -->
     <div class="form-outline mb-4 w-50 m-auto">
     <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products ">
     </div>
 </form>
     </div>
    
</body>
</html>