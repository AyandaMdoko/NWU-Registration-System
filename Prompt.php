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
  <title>NWU System</title>
    
</head>

<body class="bodyPrompt">


<style>
        .bodyPrompt {
            background-color:  rgb(101, 46, 168);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #containerPrompt {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: rgb(124, 119, 187);
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
        @media (max-width: 768px) {
            /* Apply responsive styles for screens with a maximum width of 768px */
            #containerPrompt {
                padding: 10px;
            }

            h1 {
                font-size: 24px;
            }

            button {
                padding: 8px 16px;
                font-size: 14px;
                margin: 8px;
            }
        }
    </style>
    <header class="header">


</header>

    <div id="containerPrompt">
        <h1>WELCOME TO THE NWU REGISTRATION SYSTEM</h1>
        <h2>Are you an administrator (lecturer) or a student?</h2>
        <button id="adminButton">Admin</button>
        <button id="studentButton">Student</button>
    </div>

    <script>
        const adminButton = document.getElementById("adminButton");
        const studentButton = document.getElementById("studentButton");

        adminButton.addEventListener("click", function () {
            // Redirect to the "Admin" page
            window.location.href = "Admin.php";
        });

        studentButton.addEventListener("click", function () {
            // Redirect to the "signup" page
            window.location.href = "Registeration.php";
        });
    </script>
</body>
</html>


