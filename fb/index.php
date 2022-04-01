
<?php 
include_once "./timeline.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FB Timeline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

<div class= "container"> 

    <div class= "row">


    <?php foreach ($posts as $post): ?>

    <div class="cl-md-3 my-5"> 

    
    <h3> <?php  echo $post['name']; ?> </h3>
    
    <div class="card">
  
    <img style= "height:50px; width:50px; object-fit:cover;" src=" <?php echo $post['photo']; ?> "
    alt= "" class="card-img">

    <div class="card-body">

    <h5> <?php   echo $post['time']; ?> </h5>
    <p> <?php   echo $post['desc']; ?> </p>

   <div class="card">
  
    <img style= "height:500px; width:500px; object-fit:cover;" src=" <?php echo $post['image']; ?> "
    alt= "" class="card-img">

    <div class="card-body">
   
    <h5> <?php   echo $post['like']; ?> </h5>
    <p> <?php echo $post['comment']; ?> </p>

    <h5> <?php  echo "<hr>"; ?> </h5> 
   

</div>

</div>

</div>

</div>
</div>


<?php endforeach; ?>

</div>
</div>

</body>
</html>


