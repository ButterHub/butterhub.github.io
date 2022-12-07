<?php
$question = $_POST['question'];
$desc = $_POST['description'];

$headers = "Question: $question";
$sent = mail('ButterHub_Offical@outlook.com', 'ButterHub Form Submission', $desc, $headers);

if ($sent) {

?><html>

    <head>
        <title>ButterHub - Form Sent</title>
    </head>

    <body>
        <nav href="#" class="nav" style="
        width: 100%;
        z-index: 9000;
        height: var(--nav-height);
        position: fixed;
        top: 0;
        left: 0;
        background: #127dba;
        display: flex;
        align-items: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 1);
        transition: transform 0.2s;
      ">
            <img class="icon" src="./images/ButterHubIcon.png" />
            <a href="#" class="nav__link" style="color: #ffffff; text-decoration: none; margin: 0 2em; font-size: 25px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bold">Home</a>
            <a href="#about" class="nav__link" style="color: #ffffff; text-decoration: none; margin: 0 2em; font-size: 25px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bold">About</a>
            <a href="https://butterhub.github.io/termsofservice" class="nav__link" style="color: #ffffff; text-decoration: none; margin: 0 2em; font-size: 25px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bold">ToS</a>
            <a href="https://butterhub.github.io/contact" class="nav__link" style="color: #ffffff; text-decoration: none; margin: 0 2em; font-size: 25px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bold">Contact Us</a>
        </nav>

        <!-- <form class="cen" action="./contactEmail.php" method="post">
      <label class="quesT">Your Question</label>
      <textarea class="ques" name="question" cols="1" rows="1" maxlength="50"></textarea>

      <label class="descT">Your Description</label>
      <textarea class="desc" name="description" cols="100" rows="20" maxlength="1200" minlength="50"></textarea>

      <input class="sub" type="submit" name="send" value="Submit" />
    </form> -->
        <span class="ty" style="
        width: fit-content;
        height: 50px;
        top: 150px;
        position: absolute;
        text-align: center;
        font-size: 50px;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: bolder;
      ">Thank you for your Form!</span>
        <span class="tyD" style="
        width: 150vh;
        height: 50px;
        top: 250px;
        position: absolute;
        text-align: center;
        font-size: 20px;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: bolder;
      ">We will respond to you as quickly as possible, please be patient and don't spam us. <br />
            Spamming our Email will result in it being ignored and you being blacklisted.</span>
    </body>

    </html>

<?php

} else {
?><html>

    <head>
        <title>Butter Hub - Something went wrong</title>
    </head>

    <body>
        <h1>Something went wrong</h1>
        <p>We could not send your submission. Please try again.</p>
    </body>

    </html>
<?php
}
?>