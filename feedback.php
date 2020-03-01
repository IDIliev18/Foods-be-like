<?php

include("dbConnect.php");
?>



<!Doctype html>
<html>

<head>

    <link rel="stylesheet" href="CSS & Images/index.css ">
</head>

<body>

    <div class="wrap">
        <span class="decor"></span>
        <nav>
            <ul class="primary">
                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="recipe.php">Import a recipe</a>
                </li>

                <li>
                    <a href="feedback.php">Give us feedback</a>
                </li>

                <li style="float:right">
                    <a href="about.html">About</a>
                </li>

            </ul>
        </nav>
    </div>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <div class="container">
        <form action="feedbackpro.php" method="POST" >
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" placeholder="Your name..">
      
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Your last name..">
      
          <label for="fname">Your E-mail</label>
          <input type="email" id="E-mail" name="email" placeholder="Your E-mail..">

          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="Bulgaria">Bulgaria</option>
            <option value="UK ">UK</option>
            <option value="USA">USA</option>
          </select>
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Submit">
        </form>
      </div>


</body>

</html>