 <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>Copyright 2016</h4>
    <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->



<!-- The Modal -->
<div id="id01" class="w3-modal">

  <div class="w3-modal-content">
        
        <h2 id="modalTitle">Login</h2>
        <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-closebtn">&times;</span>
	

    <div class="w3-container">
      

	<form class="w3-padding-16">
        
        <div class="w3-red w3-panel" id="loginError"></div>
        
        <input type="hidden" name="loginActive" id="loginActive" value="1">

		<label>Username</label>
		<input class="w3-input w3-border" type="text" id="username" name="email" placeholder="email">

		<label>Password</label>
		<input class="w3-input w3-border" type="password" placeholder="password">

		<a href="#" id="toggleLogin">Signup</a>

		<button class="w3-btn login" type="button" id="loginSignupBtn">Login</button>


	</form>
    </div>
  </div>
</div>

</div>
