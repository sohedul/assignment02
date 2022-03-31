
<?php 
include_once "./products.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data structure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

<div class= "container"> 

    <div class= "row">


    <?php foreach ($products as $items): ?>

    <div class="cl-md-5 my-10"> 

    <div class="card">

    <img style= "height:300px; width:300px; object-fit:cover;" src=" <?php echo $items['photo']; ?> "
    alt= "" class="card-img">

    <div class="card-body">

    <h4> <?php  echo $items['product']; ?> </h4>
    <h4> <?php   echo $items['Price']; ?> </h4>
    <h4> <?php   echo $items['Discount']; ?> </h4>

    <p> <?php echo $items['desc']; ?> </p>

    <h4> <?php  echo "<hr>"; ?> </h4> 
   

</div>

</div>

</div>



<?php endforeach; ?>

</div>
</div>

</body>
</html>


