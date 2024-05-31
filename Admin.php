<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <link rel="icon" href="nwu.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel ="stylesheet" href = "Registration.css" >
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NWU Administration System</title>
</head>
<body>

<style>
        body {
            display: flex;
            background-color:  rgb(101, 46, 168);
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
           
        }

        #container {
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
        }

        #adminForm {
            text-align: left;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            outline: none;
            border: 1px solid #007BFF;
        }

        label {
            display: block;
            text-align: left;
            font-weight: bold;
        }

        button[type="button"] {
            background-color: rgb(124, 119, 187);
            color: #fff;
            padding: 10px 40px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        button[type="button"]:hover {
            background-color: #0056b3;
        }

        p#passwordError {
            color: red;
            margin-top: 10px;
        }
        @media (max-width: 768px) {
            /* Apply responsive styles for screens with a maximum width of 768px */
            #container {
                max-width: 90%; /* Adjust the container width for smaller screens */
            }
        }
    </style>
    <div id="container">
        <h1>Admin Login</h1>
        <form id="adminForm">
            <div>
                <label for="studentNumber">Student Number:</label>
                <input type="text" id="studentNumber" name="studentNumber" placeholder="8-digit Student Number" pattern="[0-9]{8}" required maxlength="8">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id = "password" name="password" placeholder="Enter your Password" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
            </div>
            <button type="button" id="submitButton">Submit</button>
            <p id="passwordError"></p>
        </form>
    </div>

    <script>
        const studentNumberInput = document.getElementById("studentNumber");
        const passwordInput = document.getElementById("password");
        const passwordError = document.getElementById("passwordError");
        const submitButton = document.getElementById("submitButton");

        // Restrict student number input to 8 digits
        studentNumberInput.addEventListener("input", function () {
            this.value = this.value.replace(/[^0-9]/g, "").slice(0, 8);
        });

        // Restrict password input to the defined pattern
        passwordInput.addEventListener("input", function () {
            this.value = this.value.replace(/[^A-Za-z\d@$!%*?&]/g, "");
        });

        // Validate the password and redirect when the submit button is clicked
        submitButton.addEventListener("click", function () {
            const password = passwordInput.value;
            if (!password) {
                passwordError.textContent = "Password is required.";
            } else if (!/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password)) {
                passwordError.textContent = "Password must be a combination of letters, numbers, and special characters";
            } else {
                passwordError.textContent = "";
                // Redirect to CourseInfo.php
                window.location.href = "CourseInfo.php";
            }
        });
    </script>
</body>
</html>






