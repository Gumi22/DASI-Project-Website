<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Secure Login: Log In</title>
    <link rel="stylesheet" href="styles/main.css"/>
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>

    <!-- Google signin -->
    <meta name="google-signin-client_id"
          content="1074399105236-okf5r7p6746t1p06gos1aabj5avv7po3.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>
<body>
<?php
if (isset($_GET['error'])) {
    echo '<p class="error">Error Logging In!</p>';
}
?>
<form action="includes/process-login.php" method="post" name="login_form">
    Email: <input type="text" name="email"/>
    Password: <input type="password"
                     name="password"
                     id="password"/>
    Remember me: <input type="checkbox" id="rememberme"/>
    <input type="button"
           value="Login"
           onclick="formhash(this.form, this.form.password);"/>
</form>
<!-- Google signin-->
<div class="g-signin2" data-onsuccess="onSignIn"></div>

<script>
    function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
    };
</script>

<a href="#" onclick="signOut();">Sign out</a>
<script>
    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            console.log('User signed out.');
        });
    }
</script>


<p>If you don't have a login, please <a href="register.php">register</a></p>
<p>If you are done, please <a href="logout.php">log out</a>.</p>
<p>You are currently logged <?php echo $logged ?>.</p>
</body>
</html>