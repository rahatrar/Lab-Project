<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab-Project</title>
</head>

<body>
        <div class="login">
        <div class="h" id="login">
            <h1>Login & Registration</h1>
        </div>
       
        <div class="contin">
            <div class="reg">
                <form action="reg_function.php" method="POST">

                            <h1>Registration</h1>
                        
                           <label for="name">Name</label> 
                            <br>
                            <input id="fname" name="fname" value="" type="text">
                            <br>
                            <label for="email">Your Email </label> 
                            <br>
                            <input id="email" name="email" value="" type="email">
                            <br>
                        
                            <label for="phone">Phone Number </label> 
                            <br>
                            <input id="phone" name="phone" value="" type="tel">
                            <br>
                             <label for="be">Be a</label><br/>
                            <input id="be" name="be" value="" type="text">
                            <br>
                        
                            <label for="">Gender</label>
                            <br>
                            <label>
                            <input type="radio" name="gender" value="male" checked> Male 
                            <input style="margin-left: 10px;" type="radio" name="gender" value="female"> Female
                            </label>
                            <br>


                       <br>
                        <button type="submit" name="submit" class="butt butto">Sign Up</button>
                    
                </form>
            </div>
            
            <div class="log">
                <form action="appoinment_function.php" method="POST">

                            <h1>Login</h1>
                        
                           <label for="name">Email</label> 
                            <br>
                            <input id="fname" name="fname" value="" type="text">
                            <br>
                            <label for="name">Password</label> 
                            <br>
                            <input id="fname" name="fname" value="" type="password">
                            <br>
                            <button type="submit" name="submit" class="butt butto">Login</button>
                </form>
                            
                
            </div>
            </div>
        </div>
</body>

</html>
