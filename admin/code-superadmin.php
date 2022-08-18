<?php
include('authentication.php');
include('middleware/superadminAuth.php');

if(isset($_POST['category_delete']))
{
    $category_id = $_POST['category_delete'];
    //2=deleted
    $query = "UPDATE categories SET status='2' WHERE id='$category_id' LIMIT 1";
    $query_run=mysqli_query($con, $query);

    if($query_run)
    {
    $_SESSION['message'] = "Category Deleted Successfully";
    header('Location: category-view.php?id=');
    exit(0);
    }
    else
    {
    $_SESSION['message'] = "Something Went Wrong.!";
    header('Location: category-view.php?id');
    exit(0);
    }

}


?>