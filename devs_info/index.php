
<?php 
include_once "./developerdata.php";
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


    <?php foreach ($devs as $dev): ?>

    <div class="cl-md-3 my-5"> 

    <div class="card">

    <img style= "height:100px; width:100px; object-fit:cover;" src=" <?php echo $dev['photo']; ?> "
    alt= "" class="card-img">

    <div class="card-body">

    <h3> <?php  echo $dev['name']; ?> </h3>
    <h3> <?php   echo $dev['skill']; ?> </h3>

    <p> <?php echo $dev['desc']; ?> </p>

    <h4> <?php  echo "<hr>"; ?> </h4> 
   

</div>

</div>

</div>



<?php endforeach; ?>

</div>
</div>

</body>
</html>


