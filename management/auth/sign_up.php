<?php include('configureFirebase.php'); ?>
<!-- Your signup form -->
<form id="signupForm">
  <input type="email" id="signupEmail" placeholder="Email" required>
  <input type="password" id="signupPassword" placeholder="Password" required>
  <button type="button" onclick="signup()">Sign Up</button>
</form>

<script>
  function signup() {
    var email = document.getElementById('signupEmail').value;
    var password = document.getElementById('signupPassword').value;

    firebase.auth().createUserWithEmailAndPassword(email, password)
      .then((userCredential) => {
        // Signed up successfully
        var user = userCredential.user;
        console.log(user);
        // Redirect or do something after successful signup
      })
      .catch((error) => {
        var errorCode = error.code;
        var errorMessage = error.message;
        console.error(errorMessage);
      });
  }
</script>
