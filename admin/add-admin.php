<?php include('parcels/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1> Add Admin</h1>
        <br /><br /><br />
        <form action="" method="POST">
            
            <table class="tbl-30">
                <tr>
                    <td> Full Name </td>
                    <td> <input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td> Username </td>
                    <td> <input type="text" name="username" placeholder="Enter Username"></td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> <input type="password" name="password" placeholder="Enter The Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
            
        </form>
    </div>
</div>






<?php include('parcels/footer.php');  ?>


<?php
//Process the value form and save it in database
//check whether the button is clicked or not
if(isset($_POST['submit']))
{
    //button clicked
    //echo "Button Clicked";
    
    //get the data from form
    
    $full_name=$POST['full_name'];
    $username=$POST['username'];
    $password=md5($POST['password']);//password encrypted
    
    //create sql query to enter data into databse
    $sql="INSERT INTO tbl_admin SET 
    full_name='$full_name',
    username='$username',
    password='$password'";
    
  
    //$res=mysqli_query($con,$sql) or die(mysqli_error());
}

?>