<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bbotstrap.css">
</head>
<body>
<form>
    <div class="mb-3">
        <label class="form-label" for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="mb-3">
        <label class="form-label" for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="checkRemember">
            <label class="form-check-label" for="checkRemember">Remember me</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>

<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script> 
</body>
</html>
