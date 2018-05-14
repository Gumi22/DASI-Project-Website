<?php
include_once 'includes/db_connect.php';
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Secure Login: Registration Form</title>
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>

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

</head>
<body>
<!-- Anmeldeformular für die Ausgabe, wenn die POST-Variablen nicht gesetzt sind
oder wenn das Anmelde-Skript einen Fehler verursacht hat. -->
<h1>Register with us</h1>
<?php
if (!empty($error_msg)) {
    echo $error_msg;
}
$key = sha1(microtime());
$_SESSION['csrf'] = $key;
?>
<ul>
    <li>Benutzernamen dürfen nur Ziffern, Groß- und Kleinbuchstaben und Unterstriche enthalten.</li>
    <li>E-Mail-Adressen müssen ein gültiges Format haben.</li>
    <li>Passwörter müssen mindest sechs Zeichen lang sein.</li>
    <li>Passwörter müssen enthalten
        <ul>
            <li>mindestens einen Großbuchstaben (A..Z)</li>
            <li>mindestens einen Kleinbuchstabenr (a..z)</li>
            <li>mindestens eine Ziffer (0..9)</li>
        </ul>
    </li>
    <li>Das Passwort und die Bestätigung müssen exakt übereinstimmen.</li>
</ul>
<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
      method="post"
      name="registration_form">
    <input type="hidden" name="csrf" value="<?php echo $key; ?>" />
    Username: <input type='text'
                     name='username'
                     id='username' /><br>
    Email: <input type="text" name="email" id="email" /><br>
    Password: <input type="password"
                     name="password"
                     id="password"/><br>
    Confirm password: <input type="password"
                             name="confirmpwd"
                             id="confirmpwd" /><br>
    <input type="button"
           value="Register"
           onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" />
</form>
<p>Return to the <a href="index.php">login page</a>.</p>
</body>
</html>