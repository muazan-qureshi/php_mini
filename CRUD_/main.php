<?php

class abc
{
    function connection()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'crud');
        return $connect;
    } // Connection End Here

    function insert_data()
    {
        if (isset($_POST['btn'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $address = $_POST['address'];

            $sql = "INSERT INTO `users`(`name`, `email`, `phone`, `password`, `address`) VALUES ('$name','$email','$phone','$password','$address')";

            $query = mysqli_query($this->connection(), $sql);

            if (!$query) {
                echo "<script>alert('Some Thing Gone Worng')</script>";
            } else {
                echo "<script>alert('All is Well')</script>";
            }
        }
    } // Data Insertion End Here

    function select_data()
    {

        $sql = "SELECT `id`, `name`, `email`, `phone`, `password`, `address`, `date_time` FROM `users`";

        $query = mysqli_query($this->connection(), $sql);
        return $query;
    } //Data Selection End Here

    function delete_data($a)
    {
        

        $query = mysqli_query($this->connection(), "DELETE FROM `users` WHERE id='$a'");
        header('location:a.php');
        return $query;
    }
}

$object = new abc;
// $this->select_data();
// foreach ($object->select_data() as $print) {
//     // print_r($data);
//     echo $print['id'];
//     echo $print['name'];
//     echo $print['email'];
//     echo $print['password'];
//     echo $print['phone'];
//     echo $print['address'];
// }

// if(isset($_GET['pid']))
// {
//     $a = $_GET['pid'];
//     $object->delete_data($a);
// }


if(isset($_GET['cid'])){
	$a = $_GET['cid'];
	 $object->delete_data($a);
}