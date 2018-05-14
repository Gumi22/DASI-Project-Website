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

    <link rel="stylesheet" href="https://ci.phncdn.com/www-static/css/generated-header.css?cache=2018041701"
          type="text/css"/>


    <link rel="stylesheet" href="https://ci.phncdn.com/www-static/css/premium/launch-banner.css?cache=2018041701"
          type="text/css"/>
    <link rel="stylesheet" href="https://ci.phncdn.com/www-static/css/widgets-premium_promo_banner.css?cache=2018041701"
          type="text/css"/>

    <link rel="stylesheet" href="https://ci.phncdn.com/www-static/css/large.css?cache=2018041701" type="text/css"
          media="only screen and (min-width:1350px)"/>


    <link rel="stylesheet" href="https://ci.phncdn.com/www-static/css/premium/premium-modals.css?cache=2018041701"
          type="text/css"/>

    <style>

        .cwtq2zboezf1wnnbf2ha,
        .cwtq2zboezf1wnnbf2hb,
        .cwtq2zboezf1wnnbf2hd,
        .cwtq2zboezf1wnnbf2hi {
            float: right;
            height: auto !important;
        }

        .cwtq2zboezf1wnnbf2ha {
            width: 40%;
        }

        .cwtq2zboezf1wnnbf2hb {
            width: 50%;
        }

        .cwtq2zboezf1wnnbf2hd,
        .cwtq2zboezf1wnnbf2hi {
            margin-top: 30px;
            width: 50%;
        }

        .cwtq2zboezf1wnnbf2hc {
            margin: 5px auto 0;
            text-align: center;
            width: 315px;
            z-index: 0;
        }

        .cwtq2zboezf1wnnbf2hp {
            margin: 0;
            text-align: center;
            width: 315px;
            z-index: 0;
        }

        .cwtq2zboezf1wnnbf2hc .ad_title,
        .cwtq2zboezf1wnnbf2hp .ad_title {
            display: block;
            font-size: 11px;
            text-align: center;
        }

        .cwtq2zboezf1wnnbf2hv {
            text-align: center;
            margin-bottom: 20px;
        }

        .cwtq2zboezf1wnnbf2hv div:first-child {
            float: right;
        }

        .cwtq2zboezf1wnnbf2hv iframe {
            clear: both;
            display: block;
            margin-bottom: 15px;
            margin-right: 2px;
        }

        .cwtq2zboezf1wnnbf2hu {
            padding: 5px;
            overflow: hidden;
            text-align: center;
            line-height: 0;
        }

        .cwtq2zboezf1wnnbf2hu.hd {
            height: 60px;
        }

        .cwtq2zboezf1wnnbf2hu.hd iframe {
            height: 60px;
        }

        .cwtq2zboezf1wnnbf2hu iframe {
            margin: auto;
        }

        .cwtq2zboezf1wnnbf2hu a > div {
            width: 648px;
            height: 64px;
        }

        .cwtq2zboezf1wnnbf2hh {
            padding: 0;
            background: none;
            border: 0;
            margin: auto;
            border-radius: 4px;
            text-align: center;
        }

        .cwtq2zboezf1wnnbf2hh iframe {
            display: inline-block;
        }

        .cwtq2zboezf1wnnbf2hf {
            padding: 30px 0 0;
            margin: 0 auto;
            width: 966px;
            text-align: center;
            clear: both;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hc {
            margin-top: 30px;
            width: 50%;
            float: right;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2he {
            margin: 0 auto;
            width: 315px;
        }

        bgyn6 {
            display: block;
            height: 100%;
            margin: 0 auto;
            width: 100%;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hc > bgyn6 {
            display: block;
            margin: 5px auto 0;
            text-align: center;
            width: 315px;
            z-index: 0;
        }

        .cwtq2zboezf1wnnbf2hr,
        .cwtq2zboezf1wnnbf2hr bgyn6 {
            background-size: contain;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hc.cwtq2zboezf1wnnbf2hz {
            margin-top: 15px;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hc.cwtq2zboezf1wnnbf2hz bgyn6 {
            margin: 0;
        }

        .cwtq2zboezf1wnnbf2hs,
        .cwtq2zboezf1wnnbf2ht {
            margin: 0 auto;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hb bgyn6 {
            margin: 5px auto 0;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hz bgyn6,
        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hz iframe {
            margin: 5px auto 0;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hz {
            text-align: center;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hq {
            float: right;
            margin-top: 40px;
            width: 50%;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hq bgyn6 {
            margin: 5px auto 0;
            text-align: center;
            width: 315px;
            z-index: 0;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2ha {
            width: 40%;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2ha.cwtq2zboezf1wnnbf2hg {
            width: 40%;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2ha bgyn6 {
            margin: 0 auto;
        }

        .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hb {
            width: 50%;
        }

        .notloggedin {
            text-align: center;
            padding:20px;
            font-size: 30pt;
            width: 100%;
        }

        @media (min-width: 1350px) {

            .cwtq2zboezf1wnnbf2ha,
            .cwtq2zboezf1wnnbf2hb {
                margin-top: 50px;
            }

            .cwtq2zboezf1wnnbf2hd {
                width: 40%;
                margin-top: 50px;
            }

            .cwtq2zboezf1wnnbf2hi {
                width: 40%;
                margin-top: 30px;
            }

            .cwtq2zboezf1wnnbf2hc,
            .cwtq2zboezf1wnnbf2hp {
                text-align: center;
                z-index: 0;
            }

            .cwtq2zboezf1wnnbf2hp {
                margin: 0 auto;
                background-color: #101010;
            }

            .cwtq2zboezf1wnnbf2hc .ad_title,
            .cwtq2zboezf1wnnbf2hp .ad_title {
                display: block;
                font-size: 11px;
                text-align: center;
            }

            .hd-thumbs .cwtq2zboezf1wnnbf2hc .ad_title,
            .hd-thumbs .cwtq2zboezf1wnnbf2hc .ad-link {
                display: block;
            }

            .cwtq2zboezf1wnnbf2hu.hd {
                height: 76px;
                margin: auto;
                width: 770px;
            }

            .cwtq2zboezf1wnnbf2hu.hd iframe {
                height: 76px !important;
            }

            .cwtq2zboezf1wnnbf2hh {
                padding: 20px;
                border: 1px solid #1D1D1D;
                background: #101010;
            }

            .cwtq2zboezf1wnnbf2hf .removeAdsStyle {
                font-size: 12px;
            }

            .cwtq2zboezf1wnnbf2hf ul li.ps-list {
                width: 16%;
            }

            .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hc {
                width: 40%;
                margin-top: 50px;
            }

            .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hc.cwtq2zboezf1wnnbf2hz {
                width: 40%;
                margin-top: 15px;
            }

            .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hc.cwtq2zboezf1wnnbf2hz bgyn6 {
                margin: 0 auto;
            }

            .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2hq {
                width: 40%;
            }

            .cwtq2zboezf1wnnbf2hw.cwtq2zboezf1wnnbf2ha.cwtq2zboezf1wnnbf2hg {
                width: 30%;
            }
        }
    </style>

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
    Remember me: <input type="checkbox" name="rememberme" id="rememberme"/>
    <input type="button"
           value="Login"
           onclick="formhash(this.form, this.form.password);"/>
</form>

<?php if (login_check($mysqli) == true) : ?>
    <a href="#" onclick="signOut();">Sign out</a>
    <script>
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
            });
            location.replace("/DASI/logout.php");
        }
    </script>
<?php else : ?>
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

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/DASI/includes/process-google-login.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                //console.log('Signed in as: ' + xhr.responseText);
                location.replace("/DASI/index.php");
            };
            xhr.send('idtoken=' + id_token);
        };
    </script>
<?php endif; ?>



<p>If you don't have a login, please <a href="register.php">register</a></p>
<p>If you are done, please <a href="logout.php">log out</a>.</p>
<p>You are currently logged <?php echo $logged ?>.</p>
</body>
</html>