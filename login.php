<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<style>
  .heading{
    text-align: center;
  }

  .login-form{
    background: rgb(248, 248, 248);
    padding: 20px;
    width: 70%;
    margin-top: 100px;
  }
</style>

<body>


  <div class="container login-form">

    <div class="row">
      <div class="col-md-12 heading">
        <h3>Login</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>


  </div>



</body>

</html>