<?php  
session_start();
include 'partials/header.php';


// get back form data if there was a registration error

$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

unset($_SESSION['signup-data']);
?>





<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign Up</h2>
         <?php if(isset($_SESSION['signup'])) : ?>
            <div class="alert__message error">
                <p>
                    <?=$_SESSION['signup'];
                    unset($_SESSION['signup']);  
                    ?>
                </p>  
            </div>
         <?php endif ?>
        <form action="<?= ROOT_URL?>signup-logic.php" enctype="multipart/form-data" method="POST"> 
            <input type="text" name="firstname"  value="<?= $firstname?>" placeholder="firstname">
            <input type="text" name="lastname"  value="<?= $lastname?>"  placeholder="lastname">
            <input type="text" name="username"   value="<?= $username?>"placeholder="Username">
            <input type="email" name="email"  value="<?= $email?>" placeholder="Email">
            <input type="password" name="createpassword"  value="<?= $createpassword?>"placeholder="Create Password">
            <input type="password" name="confirmpassword" value="<?= $confirmpassword?>" placeholder="Confirm Password">
            <div class="form__control">
                <label for="Avatar">User Avatar</label>
                <input type="file" name="avatar" id="Avatar">
            </div>
            <button type="submit" name="submit" class="btn"> Sign up </button>
            <small>Already have an account? <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>

</body>
</html>