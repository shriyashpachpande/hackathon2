<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
  <style>
     #input-box {
            position: relative;
            opacity: 0;
            /* Start hidden */
            transform: translateX(-100%);
            /* Start off-screen to the left */
            transition: opacity 2s ease, transform 1s ease;
            /* Transition for smooth effect */
        }

        #input-box.visible {
            opacity: 1;
            /* Fade in */
            transform: translateX(0);
            /* Move to original position */
        }
        #input-box3 {
            position: relative;
            opacity: 0;
            /* Start hidden */
            transform: translateX(100%);
            /* Start off-screen to the left */
            transition: opacity 2s ease, transform 1s ease;
            /* Transition for smooth effect */
        }

        #input-box3.visible {
            opacity: 1;
            /* Fade in */
            transform: translateX(0);
            /* Move to original position */
        }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="sub-div-navbar">
    <a href="index.html">
      <div class="box1">Home</div>
    </a>
    <a href="About_us.html">
      <div class="box2">About</div>
    </a>
    <a href="property.html">
      <div class="box3">Property</div>
    </a>
    <div class="box4">Login</div>
    <a href="contact_us.html">
      <div class="box5">Contact</div>
    </a>
  </div>
  <div class="wrapper">
    <form action="loginScript.php" method="POST">
      <h1>Login</h1>
      <div class="input-box" id="input-box">
        <input type="text" name="student_id" placeholder="Student ID" required>
      </div>
      <div class="input-box input-box3" id="input-box3">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="registration.php">Register</a></p>
      </div>
    </form>
  </div>
<script>
  window.addEventListener('load', function() {
            const div = document.getElementById('input-box');
            div.classList.add('visible'); // Add the class to trigger the animation
        });
        window.addEventListener('load', function() {
            const div = document.getElementById('input-box3');
            div.classList.add('visible'); // Add the class to trigger the animation
        });
</script>
</body>

</html>