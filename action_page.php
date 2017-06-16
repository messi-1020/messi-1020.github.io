<html>
<head>
    <title>My Website</title> 
    <link rel="stylesheet" type="text/css" href="main1.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body class="space2">
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collaspe" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    <a class="navbar-brand" href="eduardo.html"/#>Home</a>
                    </div>
                <div>
                    <div class="collaspe navbar-collaspe" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li style="font-family:Lato-Semibold"><a href="eduardo.html">About</a></li>
                            <li style="font-family:Lato-Semibold"><a href="eduardo.html">Portfolio</a></li>
                            <li style="font-family:Lato-Semibold"><a href="eduardo.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        
        <?php
        
        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $message = $_POST['message'];
        $email = $_POST['email'];
        $to = 'drdfajardo18@gmail.com';
        $headers = 'From: <$emal>'."\r\n";
        
        //mail(to,subject,message,headers,parameters);
        mail($to,$message,$first+$last,$headers);
                
        ?>
    <div id="thank-you">
        <h1 class="ex1" style="color:white">Thank-You</h1>
        
        </div>
    
    </body>
</html>