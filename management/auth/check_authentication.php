<?php include('configureFirebase.php'); ?>
<script>
  // Check authentication state on each page
  firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      // User is signed in
      console.log(user);
      // Update UI for authenticated user or perform necessary actions
    } else {
      // User is signed out
      console.log("User signed out");
      // Redirect or update UI for signed-out user
      window.location.href = 'login.php';
    }
  });
</script>