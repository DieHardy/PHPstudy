<?php
$title = "Login";
include './modules/header.php'; ?>
<body>

<div class="container">
    <h2 class="mt-4">Login</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="formGroupExampleInput">Login:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="login" name="login">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Password:</label>
            <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Enter</button>
        <p>You can <a href="./registration.php"> create</a> an account if you don't have one!</p>
    </form>



</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

