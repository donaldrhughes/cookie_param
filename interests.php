<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Interests Page</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
    <header>
        <div class="top">
            <a class="logo" href="index.html">CapellaVolunteers<span class="dotcom">.org</span></a>
        </div>
        <nav>
            <ul class="topnav">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="invitation.html">Invitation</a>
                </li>
                <li><a href="gallery.html">Gallery</a>
                </li>
                <li><a href="registration.php" class="active">Registration</a>
                </li>
            </ul>

        </nav>
    </header>
    <section id="pageForm">
        <form name="interestForm" action="confirm.php" onsubmit="return formSubmit()" method="post">
            <!-- Outdoor Checkbox -->
            <label for="interests1">Outdoors:</label>
            <input type="checkbox" name="interests1" value="outdoor" id="interests1"><br>
            <!-- Indoor Checkbox -->
            <label for="interests2">Indoors:</label>
            <input type="checkbox" name="interests2" value="indoor" id="interests2"><br>
            <!-- Online Checkbox -->
            <label for="interests3">Online:</label>
            <input type="checkbox" name="interests3" value="online" id="interests3" checked>(Check Multiple)<br>
            <!-- Comments Textarea -->
            <label for="comments">Comments:</label><br>
            <textarea form="pageForm" id="comments" name="comments" rows="4" cols="50" maxlength="64" placeholder="Enter your Comments"></textarea><br>
            <!-- Referred by Textbox -->
            <label for="referred">Referred By:</label>
            <input id="referred" type="text" name="referred" placeholder="Referred By" /><br>
       
            <input type="hidden" id="userName" name="userName" />
            <input type="hidden" id="password"name="password" />
            <input type="hidden" id="passwordVerify"name="passwordVerify" />
            <input type="hidden" id="firstName"name="firstName" />
            <input type="hidden" id="lastName"name="lastName" />
            <input type="hidden" id="email"name="email" />
            <input type="hidden" id="phone"name="phone" />
            <input type="hidden" id="signUpNewsletter"name="signUpNewsletter" />
            <input type="submit" value="Register">
        </form>
    </section>

    <!-- <footer>This events site is for IT-FP3215 tasks.
    </footer> -->

    <script src="js/interests.js"></script>
</body>

</html>



     <!--

			Include other form fields here
			Interests (list at least three using a checkbox).
            Newsletter sign up (radio box with a yes/no option).
            Comments (free form text area).
            Referred by (text field).
            When the user presses submit, all of the input fields from this form as well as the registration.html form will be saved into a cookie. The user should then be forwarded to a third page (confirm.html (created by you)) that will read the cookie information and display it in a name/value pair using JavaScript.

			-->