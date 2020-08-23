<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
            <h1 class="text-center">PHP OOP CRUD</h1>
            <hr style="height: 1px; color: black;"> 
            </div>
            <div class="row">
            <div class="col-md-5 mx-auto">

            <?php 
            include 'model.php';
            $model = new Model();
            $id = $_REQUEST['id'];
            $row = $model->edit($id);

            
                if (isset($_POST['update'])) {
                    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])) {
                        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])) {
                                 $data['id'] = $id;
                                 $data['name'] = $_POST['name'];
                                 $data['email'] = $_POST['email'];
                                 $data['mobile'] = $_POST['mobile'];
                                 $data['address'] = $_POST['address'];
    
                                 $update = $model->update($data);
                                 if ($update) {
                                    echo "<script>alert('record updated');</script>";
                                    echo "<script>window.location.href = 'records.php';</script>";
                                 } else {
                                    echo "<script>alert('failed');</script>";
                                    echo "<script>window.location.href = 'records.php';</script>";
                                 }
                                } else {
                                    echo "<script>alert('empty');</script>";
                                    header("Location: edit.php?id=$id");
                                }
                        }
                    
                }
            

            ?>

            <form action="" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" id="" cols="" rows="3" class="form-control" ><?php echo $row['address']; ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>            
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>