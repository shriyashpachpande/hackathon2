<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Registration</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
        width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 420px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(10px);
            color: #fff;
            border-radius: 12px;
            padding: 30px 40px;
            margin-left: 37%;
            margin-top: 20px;
            transition: 0.4s;
        }

        .container:hover {
            border: 2px solid #ffffff;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],button,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;outline: none;
            border: 1px solid white;
            border-radius: 40px;cursor: pointer;
        }

        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            outline: none;
            border: 1px solid white;
            border-radius: 40px;cursor: pointer;
        }

        .error {
            color: red;
            margin: 10px 0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {

            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(img/login.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }


        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: #00B98E;
        }
    </style>
</head>

<body>

    <div class="container" style="width: 40% ;  margin-left: 30%;" >
        <h2 style="text-align: center;" >Student Registration</h2>
        <form id="registrationForm" method="POST" action="register.php">
            <div class="error" id="errorMessage"></div>
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="text" name="student_id" placeholder="Student ID" required>
            <input type="tel" name="mobile" placeholder="Mobile Number" required>
            <input type="email" name="email" placeholder="Email " required>
            <input type="date" name="dob" id="dob" required>
            <textarea name="address" placeholder="Address" required></textarea>

            <div>
                <select name="course" id="course" required>
                    <option value="">Select Course</option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="M.Tech">M.Tech</option>
                </select>
            </div>

            <div>
                <select name="year" id="year" required>
                    <option value="">Select Year</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
            </div>

            <div>
                <select name="branch" id="branch" required>
                    <option value="">Select Branch</option>
                    <option value="IT">IT</option>
                    <option value="CS">CS</option>
                    <option value="ENTC">ENTC</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="MECH">MECH</option>
                </select>
            </div>

            <button type="submit">Register</button>
        </form>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            const dob = new Date(document.getElementById('dob').value);
            const today = new Date();
            const age = today.getFullYear() - dob.getFullYear();
            const monthDiff = today.getMonth() - dob.getMonth();
            const isAdult = age > 18 || (age === 18 && monthDiff >= 0);

            if (!isAdult) {
                event.preventDefault();
                document.getElementById('errorMessage').innerText = "You must be at least 18 years old.";
            }
        });
    </script>
</body>

</html> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 420px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(10px);
            color: #fff;
            border-radius: 12px;
            padding: 30px 40px;
            margin-left: 37%;
            margin-top: 20px;
            transition: 0.4s;
        }

        .container:hover {
            border: 2px solid #ffffff;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="password"],
        button,
        textarea {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            margin-left: 30px;
            outline: none;
            border: 1px solid white;
            border-radius: 40px;
            cursor: pointer;transition: 0.4s;
        }
        input:hover{
            transform: scale(1.1);
        }
        textarea:hover{
            transform: scale(1.1);
        }
        select:hover{
            transform: scale(1.1);
        }
        select {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            outline: none;
            margin-left: 30px;
            border: 1px solid white;
            border-radius: 40px;
            cursor: pointer;
        }

        .error {
            color: red;
            margin: 10px 0;
        }

        body {

            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(img/login.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }


        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: #00B98E;
        }

        .divded-2 {
            width: 40%;
            transition: 0.3s;
            border: 1px solid rgb(215, 214, 214);
            border-radius: 10px;

        }

        
        .divded-2:hover {
            border: 2px solid white;
            
        }

        #divded-2 {
            position: relative;
            opacity: 0;
            /* Start hidden */
            transform: translateX(-100%);
            /* Start off-screen to the left */
            transition: opacity 0.5s ease, transform 0.5s ease;
            /* Transition for smooth effect */
        }

        #divded-2.visible {
            opacity: 1;
            /* Fade in */
            transform: translateX(0);
            /* Move to original position */
        }
        #divded-23 {
            position: relative;
            opacity: 0;
            /* Start hidden */
            transform: translateX(100%);
            /* Start off-screen to the left */
            transition: opacity 0.5s ease, transform 0.5s ease;
            /* Transition for smooth effect */
        }

        #divded-23.visible {
            opacity: 1;
            /* Fade in */
            transform: translateX(0);
            /* Move to original position */
        }
    </style>
</head>

<body>

    <div class="container" style="width: 80% ; height: 400px; margin-left: 10%; margin-top: 130px; display:flex; align-items: center; justify-content: space-around; ">
        <div class="divded-2" id="divded-2">

            <h2 style="text-align: center;">Student Registration</h2>
            <form id="registrationForm" method="POST" action="register.php">
                <div class="error" id="errorMessage"></div>
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="text" name="student_id" placeholder="Student ID" required>
                <input type="tel" name="mobile" placeholder="Mobile Number" required>
                <input type="email" name="email" placeholder="Email (only @mgmcen.ac.in or @sggscoe.ac.in)" required>
                <input type="password" name="password" placeholder="Password" required>
        </div>


        <div class="divded-2" id="divded-23">



            <input type="date" name="dob" id="dob" required>
            <textarea name="address" placeholder="Address" required></textarea>

            <div>
                <select name="course" id="course" required>
                    <option value="">Select Course</option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="M.Tech">M.Tech</option>
                </select>
            </div>

            <div>
                <select name="year" id="year" required>
                    <option value="">Select Year</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
            </div>

            <div>
                <select name="branch" id="branch" required>
                    <option value="">Select Branch</option>
                    <option value="IT">IT</option>
                    <option value="CS">CS</option>
                    <option value="ENTC">ENTC</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="MECH">MECH</option>
                </select>
            </div>

            <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            const dob = new Date(document.getElementById('dob').value);
            const today = new Date();
            const age = today.getFullYear() - dob.getFullYear();
            const monthDiff = today.getMonth() - dob.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                age--;
            }
            if (age < 18) {
                event.preventDefault();
                document.getElementById('errorMessage').innerText = 'You must be at least 18 years old.';
            }
        });

        window.addEventListener('load', function() {
            const div = document.getElementById('divded-2');
            div.classList.add('visible'); // Add the class to trigger the animation
        });
        window.addEventListener('load', function() {
            const div = document.getElementById('divded-23');
            div.classList.add('visible'); // Add the class to trigger the animation
        });
    </script>
</body>

</html>