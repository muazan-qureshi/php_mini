<?php include('main.php');
$object->insert_data();


?>

<!doctype html>
<html lang="en">

<head>
    <title>CRUD OPERATIONS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <!-- Form Start Here -->
        <form action="" method="POST" class="form bg-light p-5">
            <h2 class="text-center py-2">Insert Form</h2>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Enter YOur Name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Enter YOur Email">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="tel" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Enter YOur Phone Number">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Enter YOur Password">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address" id="" aria-describedby="helpId" placeholder="Enter YOur Address">
            </div>
            <button class="btn btn-warning" name="btn" type="submit">
                Submit
            </button>
        </form>
    </section>
    <hr>
    <section class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Date & Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $srno = 1;
                foreach ($object->select_data() as $print) {

                ?>
                    <tr>
                        <td><?php echo $srno; ?></td>
                        <td><?php echo $print['id']; ?></td>
                        <td><?php echo $print['name']; ?></td>
                        <td><?php echo $print['email']; ?></td>
                        <td><?php echo preg_replace("/[a-z.0-9.!@#$%^&*()-=+]/i", "*", $print['password']); ?></td>
                        <td><?php echo $print['phone']; ?></td>
                        <td><?php echo $print['address']; ?></td>
                        <td><?php echo $print['date_time']; ?></td>
                        <!-- <td><a class="btn btn-danger" href="main.php=?pid='.$print['id'].'">X</a></td> -->
                        <td><a class="btn btn-danger" href="main.php?cid=<?php echo $print['id']; ?>">X</a></td>

                    </tr>

                <?php
                    $srno++;
                }
                ?>
            </tbody>
        </table>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>