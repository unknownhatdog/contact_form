<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="design.css??">
</head>

<body>

    <main>
        <div id="heading">
            <div id="img-txt">
                <img src="images/edit-contact.svg" alt="contact form icon">
                &nbsp&nbsp
                <h1>Contact form</h1>
            </div>
            <p>Please feel free to contact us using this form, and we will respond as quickly as soon as possible.</p>
            <div id="line">

            </div>
        </div>

        <form action="function.php" method="post">
            <div class="con" id="wrapperUsername">
                <!-- for full name -->
                <div>
                    <label for="firstname">First name</label><br>
                    
                    <div id="wrapper-for-username-field">
                        <div id="wrapper-image-for-username">
                            <img src="images/fname-lname.svg" alt="email icon">
                        </div>
                        <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required>

                    </div>
                </div>
                <!-- for last name -->
                <div>
                    <label for="lastname">Last name</label><br>
                    <div id="wrapper-for-username-field">
                        <div id="wrapper-image-for-username">
                            <img src="images/fname-lname.svg" alt="email icon">
                        </div>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required>

                    </div>
                </div>
            </div>
            <!-- for email -->
            <div class="con">
                <label for="email">Email</label><br>
                <div id="wrapper-field">
                    <div id="wrapper-icon">
                        <img src="images/email.svg" alt="email icon">
                    </div>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
            </div>
            <!-- for subject -->
            <div class="con">
                <label for="subject">Choose a subject:</label><br>      
                <div id="wrapper-field">
                    <div id="wrapper-icon">
                        <img src="images/menu-book-outline.svg" alt="email icon">
                    </div>
                    <select id="subject" name="subject" required>
                    <option value="" disabled selected>choose here</option>
                    <option value="Subject 1">Subject 1</option>
                    <option value="Subject 2">Subject 2</option>
                    <option value="Subject 3">Subject 3</option>
                    <option value="Subject 4">Subject 4</option>
                </select>
                </div>

            </div>
            <!-- for gender -->
            <div class="con" id="wrapper-genderAndInterest">
                <div>
                    <input type="radio" id="male" name="gender" value="Male" required>
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="Female" required>
                    <label for="female">Female</label><br>
                </div>
                <!-- for topic -->
                <div>
                    <input type="checkbox" id="topic1" name="topic[]" value="Math">
                    <label for="topic1"> topic 1</label><br>
                    <input type="checkbox" id="topic2" name="topic[]" value="Science">
                    <label for="topic2"> topic 2</label><br>
                    <input type="checkbox" id="topic3" name="topic[]" value="Pilipino">
                    <label for="topic3"> topic 3</label><br>
                </div>
            </div>
            <!-- for message -->
            <div class="con">
                <label for="textarea">Enter your message</label><br>
                <textarea id="textarea" name="textarea" cols="30" rows="10"></textarea>
            </div>
            <div class="con">
                <input type="submit" value="Submit" id="submitButton" name="submitButton">
            </div>

        </form>
    </main>

</body>

</html>