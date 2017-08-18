<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Signup For A Free Wealth Consult</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/screen.1.26.4.css" />
    <link rel="shortcut icon" href="img/favicon.ico" />

    <meta name="description" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Free Wealth Consult " />
    <meta property="og:title" content="Signup For A Free Wealth Consult" />
    <meta property="og:url" content="https://www.signup.adonayverrett.com" />
    <meta property="og:description" />



</head>

<?php
	if (isset($_POST["submit"])) {

		$fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$from = 'AdonayVerret.com';
		$to = 'adonay1314@gmail.com';
		$subject = 'Info from AdonayVerret.com Landing Page';

		$body = "First Name: $fname\n\n Last Name: $lname\n\n E-Mail: $email\n\n Phone: $phone";

	if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Success, you will be redirected momentarily...</div>';
    echo "<script type='text/javascript'>window.location.href = 'http://www.adonayverrett.com';</script>";
	} else {
		$result='';
	}
	}
?>


<body data-template="campaign-strip" data-referral="us" data-region="us">

    <header role="banner">
        <div class="campaign-header  campaign-header- campaign-header-white " data-gtm="global-navigation-section">

            <div class="row">
                <div class="column">
                    <div class="campaign-header-wrap">

                        <div class="campaign-header-additional">
                        </div>

                        <div class="campaign-header-branding">

                            <a class="campaign-header-logo" href="https://www.adonayverrett.com">

                                <img src="img/logo.png" />

                                <span class="campaign-header-strapline">Business Consultant</span>

                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>


    <main role="main" class="main">


        <div class="section section-padding section-padding-none section-white  section-section_c1c0">

            <div class="row">
                <div class="small-12 columns">

                    <form class="signup-form  signup-form-no-background " name="signupForm" method="post" action="#">
                      <div class="result">
                        <?php echo $result; ?>
                      </div>
                        <div class="title-text">
                            <h2 class="title title-2">Free Wealth Consultation</h2>

                            <div class="text">
                                <p>Start your new future by making the first move.</p>

                                <p> </p>


                            </div>
                        </div>




                        <div class="signup-form-firstname form-group">
                            <label class="form-label">
                    <span class="form-name">First name</span>

                    <input class="form-input" type="text" name="FirstName" placeholder="First Name" autocomplete="given-name" maxlength="255" required>
                </label>
                        </div>



                        <div class="signup-form-lastname form-group">
                            <label class="form-label">
                    <span class="form-name">Last name</span>

                    <input class="form-input" type="text" name="LastName" placeholder="Last Name" autocomplete="family-name" maxlength="255" required data-required-error="Last name can't be empty">
                </label>
                        </div>



                        <div class="signup-form-email form-group">
                            <label class="form-label">
                    <span class="form-name">Email address</span>

                    <input class="form-input" type="email" name="email" placeholder="Email" autocomplete="email" maxlength="100" required data-required-error="Email address can't be empty" data-email-error="Email address is invalid">
                </label>
                        </div>

                        <div class="signup-form-phone form-group">
                            <label class="form-label">
                        <span class="form-name">Phone number</span>

                        <input class="form-input" type="tel" name="phone" placeholder="Phone Number" autocomplete="tel" maxlength="15" required data-required-error="Phone number can't be empty">
                    </label>
                        </div>


                        <div class="signup-form-submit form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Get started</button>
                        </div>


                    </form>

                </div>
            </div>



        </div>



</body>

</html>
