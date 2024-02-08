<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js">
    <title>Laboratory Exercise 3</title>
</head>

<body>
    <header class="header-fix">
        <div class="header-container">
            <h1><i class="fa fa-table"></i>Forms</h1>
        </div>
    </header>
    <div class="container">
        <section>
            <aside>
                <h2><i class="fa fa-question"></i>Info</h2>
                <ul>
                    <li><b>method:Post</b></li>
                    <li><b>Mandatory fields</b></li>
                    <li><b>Standard field: text and password</b></li>
                    <li><b>Checkbox: checkbox</b></li>
                    <li><b>Standard button: submit</b></li>
                </ul>
            </aside>
            <article>
                <h2>Login Form</h2>
                <p class="para">Standard form to enter these <strong>login credentials:</strong></p>
                <form action="index.php" method="post" class="form-element" id="loginForm" onsubmit="event.preventDefault(); showLoginDetails();">
                    <div class="form-element-div">
                        <span>
                            <label>Enter your username:</label>
                            <input type="text" name="uname" autofocus required><br><br>
                            <label>Enter your password:</label>
                            <input type="password" name="pword" required><br>
                            <input type="checkbox" class="form-check">
                            <label>Remember me</label><br><br>
                            <input type="submit" value="Login" name="submit" class="forms-btn">
                        </span>
                    </div>
                </form>
                <div class="results" id="loginDetails" style="display: none;">
                    <h4>Values returned by the form:</h4>
                    <ul>
                        <li id="usernameValue"></li>
                        <li id="passwordValue"></li>
                        <li id="formName">Form => Login Form</li>
                    </ul>
                </div>
            </article>
        </section>

        <hr>
        <section>
            <aside>
                <h2><i class="fa fa-question"></i>Info</h2>
                <ul>
                    <li><b>method:POST</b></li>
                    <li><b>Mandatory fields</b></li>
                    <li><b>File sending</b></li>
                    <li><b>Standard field: text, email, date, file and password</b></li>
                    <li><b>Checkbox: checkbox</b></li>
                    <li><b>Radio button: submit</b></li>
                    <li><b>Standard button: submit</b></li>
                </ul>
            </aside>
            <article>
                <h2>Registration Form</h2>
                <p>Standard form for <strong>online registration</strong> on a website:</p>
                <form action="index.php" method="post" class="form-element" enctype="multipart/form-data" id="registrationForm">
                    <div class="form-element-div">
                        <span>
                            <label for="Gender">Enter your <b>Gender:</b></label><text>*</text>
                            <input type="radio" name="gender" value="F" id="id5" required>
                            <label for="female">Male</label>
                            <input type="radio" name="gender" value="M" required>
                            <label for="male">Female</label><br><br>

                            <label for="Lastname">Enter your <b>Lastname:</b></label><text>*</text>
                            <input type="text" name="lastname" id="id6" required><br><br>
                            <label for="Firstname">Enter your <b>Firstname:</b></label>
                            <input type="text" name="firstname" id="id7"><br><br>

                            <label for="Date">Enter your <b>Date of Birth:</b></label>
                            <input type="date" name="dob" id="id8" ><br><br>

                            <label for="File">Enter your <b>Photo:</b></label>
                            <input type="file" id="id9" name="myfile" onchange="previewImage(event)"><br><br>
                            <img id="preview" src="#" alt="Uploaded Image" style="display: none; max-width: 250px;">

                            <label for="Mail">Enter your <b>Email address:</b></label><text>*</text>
                            <input type="email" name="email" id="id10"  required><br><br>

                            <label for="Password">Enter your <b>Password:</b></label><text>*</text>
                            <input type="password" name="password" id="id11" required><br><br>
                            <label for="CPassword"><b>Confirm</b> your password:</label><text>*</text>
                            <input type="password" id="id12" required><br><br>
                            <text>*mandatory field</text><br>

                            <input type="checkbox" name="tos" id="id13" required>
                            <label for="cb">Accept TOS</label><br><br>

                            <input type="button" value="Registration" name="reg" class="forms-btn" onclick="showRegistrationDetails()">
                        </span>
                    </div>
                </form>
                <div class="results" id="registrationDetails" style="display: none;">
                    <h4>Values returned by the form:</h4>
                    <ul>
                        <li id="genderValue"></li>
                        <li id="lastnameValue"></li>
                        <li id="firstnameValue"></li>
                        <li id="dobValue"></li>
                        <li id="emailValue"></li>
                        <li id="passwordValue"></li>
                        <li id="tosValue"></li>
                        <li id="formName">Form => Registration Form</li>
                    </ul>
                    <h4>Image Preview:</h4>
                    <img id="previewImage" src="#" alt="Uploaded Image" style="max-width: 250px;">
                </div>
            </article>
        </section>

        <hr>
        <section>
            <aside>
                <h2><i class="fa fa-question"></i>Info</h2>
                <ul>
                    <li><b>method:Post</b></li>
                    <li><b>Mandatory fields</b></li>
                    <li><b>Placeholder attribute</b></li>
                    <li><b>Textarea</b></li>
                    <li><b>Standard button: submit</b></li>
                </ul>
            </aside>
            <article>
                <h2>Contact Form</h2>
                <p>Standard form for making an<strong> information request</strong> on a website:</p>
                <form action="index.php" method="post" class="form-element">
                    <div class="form-element-div">
                        <span>
                            <label>Department you wish to contact:</label><text>*</text>
                            <select name="department" id="num4">
                                <option value="sales">Sales Department</option>
                                <option value="comm">Communication Department</option>
                                <option value="tech">Technical Department</option>
                            </select><br><br>

                            <label class="textlbl">Enter a <strong>Title:</strong></label><text>*</text>
                            <input type="text" id="num3" name="title" placeholder="More than 20 characters" minlength="20" required><br><br>

                            <label>Enter a <strong>Question:</strong></label><text>*</text>
                            <textarea name="comment" id="num2" cols="10" rows="10" maxlength="1000" placeholder="Maximum of 1000 characters..." required></textarea><br><br>

                            <label for="mail">Enter your <b>Email address:</b></label><text>*</text>
                            <input type="email" name="mail2" required placeholder="Your Email..." id="num1"><br><br>

                            <input type="button" value="Contact" name="contact" id="forms-btn3" onclick="showContactDetails()">
                        </span>
                    </div>
                </form>
                <div class="results" id="contactDetails" style="display: none;">
                    <h4>Values returned by the form:</h4>
                    <ul>
                        <li id="departmentValue"></li>
                        <li id="titleValue"></li>
                        <li id="commentValue"></li>
                        <li id="email2Value"></li>
                        <li id="formName">Form => Contact Form</li>
                    </ul>
                </div>
            </article>
        </section>

        <script>
            function previewImage(event) {
                var preview = document.getElementById('preview');
                var previewImage = document.getElementById('previewImage');
                previewImage.style.display = "block";
                previewImage.src = URL.createObjectURL(event.target.files[0]);
                preview.style.display = "none";
            }

            function showRegistrationDetails() {
                var registrationDetails = document.getElementById('registrationDetails');
                var gender = document.querySelector('input[name="gender"]:checked').value;
                var lastname = document.getElementById('id6').value;
                var firstname = document.getElementById('id7').value;
                var dob = document.getElementById('id8').value;
                var email = document.getElementById('id10').value;
                var password = document.getElementById('id11').value;
                var tos = document.getElementById('id13').checked ? 'Ok' : 'Not Ok';

                document.getElementById('genderValue').innerText = "Gender => " + gender;
                document.getElementById('lastnameValue').innerText = "Lastname => " + lastname;
                document.getElementById('firstnameValue').innerText = "Firstname => " + firstname;
                document.getElementById('dobValue').innerText = "Date of Birth => " + dob;
                document.getElementById('emailValue').innerText = "Email address => " + email;
                document.getElementById('passwordValue').innerText = "Password => " + password;
                document.getElementById('tosValue').innerText = "Accept TOS => " + tos;
                document.getElementById('formName').innerText = "Form => Registration Form";

                registrationDetails.style.display = "block";
            }

            function showLoginDetails() {
                var loginDetails = document.getElementById('loginDetails');
                var username = document.querySelector('input[name="uname"]').value;
                var password = document.querySelector('input[name="pword"]').value;

                document.getElementById('usernameValue').innerText = "Username => " + username;
                document.getElementById('passwordValue').innerText = "Password => " + password;
                document.getElementById('formName').innerText = "Form => Login Form";

                loginDetails.style.display = "block";
            }

            function showContactDetails() {
                var contactDetails = document.getElementById('contactDetails');
                var department = document.querySelector('select[name="department"]').value;
                var title = document.getElementById('num3').value;
                var comment = document.getElementById('num2').value;
                var email2 = document.getElementById('num1').value;

                document.getElementById('departmentValue').innerText = "Department => " + department;
                document.getElementById('titleValue').innerText = "Title => " + title;
                document.getElementById('commentValue').innerText = "Comment => " + comment;
                document.getElementById('email2Value').innerText = "Email address => " + email2;
                document.getElementById('formName').innerText = "Form => Contact Form";

                contactDetails.style.display = "block";
            }
        </script>
    </div>
</body>

</html>
