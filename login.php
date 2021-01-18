<!DOCTYPE html>
<html lang="en">

	<?php
		$activePage = 'Login';
		$level = '';
		function __autoload($className)
		{
			require_once('classes/'.$className.'.php');
        }
        //used to validate login info
        $username = "";
        $password = "";
        $hash = "";
        $errMsg = "";
        $userObj="";
	?>

	<head>
		<?php 
			include_once('templates/header.php'); 
		?>
	</head>

  	<body>
  		<?php
			include_once('templates/nav.php');
        ?>
        <!-- Conditional rendering: If user is NOT logged in, render HTML form and process form validation -->
        <?php
            if(empty($_SESSION['username'])) {
                if(isset($_POST['submit'])){
                    unset($errMsg);                             //reset the error message so it does not reprint
                    $username   = trim($_POST["username"]);     //get username from form
                    $password   = trim($_POST["password"]);     //get password from form
                    $hash       = password_hash($password, PASSWORD_DEFAULT); //encrypt the password using the default algorithm
                    // check if user/pwd are empty
                    if ((empty($password)) || (empty($username))){
                        $errMsg = "please fill both fields.";
                    }
                    else {
                        //search for existing users by accessing database through User class 
                        $userObj = new User();
                        $user = $userObj->SelectUserByUsername($username);
                        //username exists
                        if ($user) {
                            if (password_verify($user['password'], $hash)) {    //attempt to verify password by comparing hash to password string
                                $_SESSION["user_id"]=$user['user_id'];              //set session variables to remember user
                                $_SESSION["username"]=$user['username'];
                                $_SESSION["fname"]=$user['fname'];
                                header("location: index.php");                      //redirect to home page
                                exit;
                            }
                            else {
                                $errMsg = "invalid login credentials.";
                            }
                        }
                        else {
                            $errMsg = "invalid login credentials.";
                        }
                    }
                    unset($username);                                               //clear form
                    unset($password);                                               //clear form
                }

        ?>
        
        <div class="container pt">
            <div class="login-container">
                <h2 class="centered">Log in</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"method="post">
                    <div class="form-group form-inputs">
                        <label>username:</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username?>">
                        <label>password:</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $password?>">
                    </div>
                    <?php 
                        if(!empty($errMsg))
                            echo "<p class=\"err-msg centered\">", $errMsg, "</p>";
                        else
                            echo "";
                    ?>
                    <div class="form-group form-btn centered">
                        <input type="submit" class="btn" name="submit" value="log in">
                    </div>
                </form>
            </div>
        </div>

        <!-- Conditional rendering: If user IS logged in, render logout button -->
        <?php
        } //closing brace of above if-statement checking user login state
        else {
        ?>
        <div class="container pt">
            <div class="login-container">
                <h2 class="centered">hello, <?php echo($_SESSION['fname']) ?>!</h2>
                <div class="form-btn form-group centered">
                    <a class="btn" href="addPost.php" role="button">add post</a>
                </div>
                <div class="form-btn form-group centered">
                    <a class="btn" href="logout.php" role="button">log out</a>
                </div>
            </div>
        </div>

        <?php
        } //closing brace of above else-statement checking user login state
        ?>

    </body>
    <?php
        include_once('templates/footer.php');
    ?>
</html>   