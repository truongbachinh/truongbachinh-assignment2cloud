<div class="row align-items-center" style="justify-content: space-between; padding: 20px; height: 210px">
	<a href="index.php"><img src="images/logo.png" style="height: 180px"></a>

	<h3 style="color: red">Hotline: 0965.560.564 </h3>
	<div style="text-align: center;">
		<!-- <h4>Admin Login</h4>
		<form action="index.php" method="post">
			<div class="row align-items-center">
				<div style="margin-right: 31px">
					<label for="email">Username:</label>
				</div>
				<div>
					<input type="text" class="form-control" name="username">
				</div>
			</div>
			<div class="row align-items-center">
				<div style="margin-right: 36px">
					<label for="pwd">Password:</label>
				</div>
				<div>
					<input type="password" class="form-control" name="password">
				</div>
			</div>
			<button type="submit" class="btn btn-success" name="login">Login</button>
		</form> -->
		  <input type="button" id="btnLogin" value="Login with Google"> 
    <script>
        $('#btnLogin').on('click',loginClicked);
        function   loginClicked(){
            var provider = new firebase.auth.GoogleAuthProvider();
            firebase.auth().signInWithPopup(provider).then(result=>{
                if(result !=null){
                    window.location.replace('admin.php');
                }
            })
        }
    </script>

	</div>          
</div>

