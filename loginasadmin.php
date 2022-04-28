
<h2 class="text-center">Login</h2>
	<form >
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="email" name="email" class="form-control" value="<?= $email; ?>">
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" value="<?= $password; ?>">
		</div>

		<div class="form-group">
			<input type="submit" value="login" class="btn btn-primary">
		</div>
	</form>
	<p class="text-right btn"><a href="/phpAssignment2/index.php" alt="home">Visit Site</a></p>

    <?php 

$ausername = $_POST['adminusername'];
$apassword = $_POST['adminpassword'];

session_start();

if ($ausername == 'admin' && $apassword == 'password') {
   $_SESSION['admin']=$_POST['adminusername'];
header("location:adminaddnewproduct.php");
} else {
echo "<h1>Invalid admin credentials</h1>";
}				

?>