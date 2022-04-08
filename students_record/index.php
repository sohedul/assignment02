<?php

include_once "./db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php
if( isset($_POST['add_Student'])){

$fathers_name=$_POST['fathers_name'];
$email_father=$_POST['email_father'];
$fathers_job=$_POST['fathers_job'];
$fathers_bank_acc=$_POST['fathers_bank_acc'];
$mothers_name=$_POST['mothers_name'];
$email_mother=$_POST['email_mother'];
$mothers_occupation=$_POST['mothers_occupation'];
$mothers_income=$_POST['mothers_income'];
$cell_no=$_POST['cell_no'];


if( empty($fathers_name) || empty($email_father)|| empty($fathers_job)|| empty($fathers_bank_acc) || empty($mothers_name) || empty($email_mother) || 
empty($mothers_occupation) || empty($mothers_income) || empty($cell_no)) {

    $msg = "<p class =\"alert alert-danger d-flex justify-content-between \"> all field are required ! <button class =\"btn-close\"data-bs-dismiss=\"alert\"></button></p>";

}else{

   
$connection -> query("INSERT INTO students_record (fathers_name,email_father,fathers_job,fathers_bank_acc,
mothers_name,email_mother,mothers_occupation,mothers_income,cell_no) value ('$fathers_name','$email_father','$fathers_job','$fathers_bank_acc','$mothers_name',
'$email_mother','$mothers_occupation','$mothers_income','$cell_no')");

$msg = "<p class =\"alert alert-danger d-flex justify-content-between \"> Data submission is successful ! <button class =\"btn-close\"data-bs-dismiss=\"alert\"></button></p>";

}

}


?>


<div class="container my-3">
<div class="row justify-content-center">
<div class="cl-md-3">
<div clas="card shadow">
<div class="card-body">

<h2> Create your account</h2>

<?php echo $msg ?? ''; ?>

<hr>
<form action="" method="POST">
    <div class="my-3">

    <label for="">fathers_name</label>
    <input name="fathers_name" type="text" class="form-control">
    
    </div>

    <div class="my-3">

    <label for="">email_father </label>
    <input name="email_father" type="text" class="form-control">
    
    </div>

    <div class="my-3">

<label for="">fathers_job</label>
<input name="fathers_job" type="text" class="form-control">

</div>

<div class="my-3">

    <label for="">fathers_bank_acc</label>
    <input name="fathers_bank_acc" type="text" class="form-control">
    
    </div>
    <div class="my-3">

<label for="">mothers_name</label>
<input name="mothers_name" type="text" class="form-control">

</div>
<div class="my-3">

    <label for="">email_mother</label>
    <input name="email_mother" type="text" class="form-control">
    
    </div>

    <div class="my-3">

<label for="">mothers_occupation</label>

<select name="mothers_occupation" class="form-control" name="" id="">

    <option value="">-select-</option>
    <option value="Govt Job">Govt Job</option> 
    <option value="NGO Job">NGO Job</option> 
    <option value="Self Employed">Self Employed</option> 
    <option value="Agro fisheries">Agro fisheries</option> 
    <option value="Home Maker">Govt Job</option> 
    <option value="Others">Others</option> 

    </select>

</div>

<div class="my-3">

    <label for="">mothers_income</label>
    <input name="mothers_income" type="text" class="form-control">
    
    </div>
<div class="my-3">

<label for="">cell_no</label>
<input name="cell_no" type="text" class="form-control">

</div>

</div>
<div class="my-3">


<input type="submit" name="add_Student" class="btn btn-primary w-100" value="add new student">

</div>



</div>
</div>
</div>
</div>
</div>

<div class="container my-5">
<div class="row justify-content-center">
<div class="cl-md-8">
<div clas="card shadow">
<div class="card-body">

<h2> all students record</h2>

<hr>
<table class="table"> 

<thead>
    
        <tr> 
<th>#</th>
<th>Father</th>
<th>Father's Email</th>
<th>Father's Job</th>
<th>Father's Bank Acc</th>
<th>Mother's Name</th>
<th>Mothers's Email</th>
<th>Mom's Occupation</th>
<th>Mom's Income</th>
<th>cell_no</th>
<th>action</th>
       
</tr>
</thead>
<tbody>

<?php 
                            

                            $data = $connection -> query("SELECT * FROM students_record");

                            echo " Students Number = " . $data -> num_rows;
                            
                            $i = 1;
                            while( $students_record =  $data -> fetch_object() ) :
                        ?>

<tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $students_record -> fathers_name; ?></td>
                                <td><?php echo $students_record -> email_father; ?></td>
                                <td><?php echo $students_record -> fathers_job; ?></td>
                                <td><?php echo $students_record -> fathers_bank_acc; ?></td>
                                <td><?php echo $students_record -> mothers_name; ?></td>
                                <td><?php echo $students_record -> email_mother; ?></td>
                                <td><?php echo $students_record -> mothers_occupation; ?></td>
                                <td><?php echo $students_record -> mothers_income; ?></td>
                                <td><?php echo $students_record -> cell_no; ?></td>
                                
                                <td>
                                    <a class="btn btn-sm btn-info" href="#">View</a>
                                    <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                </td>
                            </tr>

                            <?php endwhile; ?>

   

</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>
