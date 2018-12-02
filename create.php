<?php
include "connect_database.php";
$errors=array();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name;
    if(isset($_POST['name'])and !empty($_POST['name']))
    {
        $name=$_POST['name'];
    }
    else
        $errors['name']="Name is empty";
    $email;
    if(isset($_POST['email'])and !empty($_POST['email']))
    {
        $email=$_POST['email'];
    }
    else
        $errors['email']="Email is empty";
    if(count($errors)==0)
    {
        $query="INSERT INTO `tblusers`(`Name`, `Email`, `Password`) 
                  VALUES ('{$name}','{$email}','123456')";
        $result = $connect->query($query);
        $linkIndex="/index.php";
        header("Location: {$linkIndex}");
        exit;
    }
}
?>

<?php include "_header.php" ?>


<h1>Додати нового користувача</h1>
<?php
    if(count($errors)!=0)
    { ?>
        <div class="alert alert-danger" role="alert">
            Заповніть поля!
        </div>
<?php
    }
?>
<form method="post" action="create.php">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>



<?php include "_footer.php" ?>

