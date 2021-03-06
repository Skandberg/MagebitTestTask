
<?php 
    $email=(!empty($_POST['subscribe_email']) ? $_POST['subscribe_email'] : null);
    $error="";
    if (empty($email)){
        $error='please input your email';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error='invalid email format';
    }
    if (substr($email, -1)==".co"){
        $error='emails from Columbia are not allowed';
    }
    echo $error;

   
?>

<html>   
    <head>
        <title>News about Israel</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" >
    <body>
        <script src="jquery-3.5.1.js"></script>
        <script src="validation.js"></script>
        <div class="navigation">
            <ul>
                <li class="logo"><img src="../images/Israel.jpg"></li>
                <li><a class="menu" href="#">About</a></li>
                <li><a class="menu" href="#">How it works</a></li>
                <li><a class="menu" href="#">Contacts</a></li>
            </ul>
        </div>
      
        <div class="subscription">
            <h1 class="shalom">שָׁלוֹם עֲלֵיכֶם</h1>
            <h1 class="title">Subscribe to our news about Israel</h1>
            <p class="description">Subscribe and you will be aware of Israeli politics, <br> economics and culture events!</p>

            <form id="form" action="add_email.php" method="POST">
                <input id="email" class="email_input" type="email" name="subscribe_email" placeholder="youremail@mail.com" onkeydown="validate_email(document.getElementById('terms'))">
                <br>
                <input id="terms" class="terms_of_use_checkbox" type="checkbox" name="terms" onclick="validate_email(this)">               
                <label for="terms_of_use" id="terms_of_use_label">I have read and agree with terms of use</label>
                <br>             
                <button id="subscribe" class="subscribe" name="subscribe" >OK</button>
                <br>
                <p id="errors"></p>
            </form>
            
          
        </div>

        <div class="social_media">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="right">
            <img class="picture" src="../images/Jerusalem.jpg" alt="Jerusalem" >
        </div>      
        
    </body>

</html>
