<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- bootstrap -5  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body style="background-color: aqua;">
    <div class="d-flex justify-content-center align-items-center"
    style="min-height: 100vh;">
    <form class="p-5 rounded shadow"
        style="max-width: 30rem; width:100% ;background-color : white "
        method="POST"
        action="php/auth.php  ">
        <!-- <?php 
        #first inseting admin
        #we havae to encrypt the password  using password_hash
         echo password_hash("12345",PASSWORD_DEFAULT);
        ?> -->

        <h1 class="text-center display-4 pb-5">LOGIN</h1>
    <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
    <?php  } ?>
        
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">LOGIN</button>
            <a href="index.php">Store</a>
        </form>
    </div>
</body>
</html>