<?php

@include('dbconnect.php');

$sql = "SELECT * FROM `por` WHERE StuNum";
$result = $conn->query($sql);
$secondYear = $result->fetch_assoc();

$bio = "SELECT FirstName, Surname FROM `biographical_info` WHERE bio_id";
$results = $conn->query($bio);
$names = $results->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NWU Registeration Portal</title>
</head>
<body>
    <form class="form_container" method="" action="">
    <div><img class="nwu-logo"  src="..\PROJECT 223 (MAIN)\images\NWU-logo.png" alt="" ></div>

        <div class="middle-section">
            <h2><b>PROOF OF REGISTRATION 2024</b></h2>
        </div>

        <div class="details">
            <label class="name"><?php echo $names['FirstName']?> <?php echo $names['Surname']?></label></br>
            <label class="STUnumber"><?php echo $secondYear['StuNum']?></label></br>
            <label class="campus">Mahikeng Campus</label></br>
            <label class="cname">Bcom in Information Systems</label></br>
            <label class="curre">Curriculum</label></br>
        </div>

            <div class="modules">
                <table >
                    <tr>
                        <th>Modules</th>
                    </tr>
                    <?php
    		          //while($fetch = $secondYear->fetch_array()){
		              ?>
                    <tr>
                        <th><?php // echo $fetch['Modules_registered_for']?></th>
                    </tr>
                    <?php
				//}
			?>
                </table>
            </div>  
        
    </form>
    <style>
        .table, th {
            border: 1px solid black;
            border-collapse: collapse;
            height: 25px;
            width: 600px;
        }
    
        .form_container {
            margin: 10px;
            width: 800px;
            border: 1px solid black;
            height: 780px;
            margin-left: 20%;
            display: flex; /* Use flexbox to center its children */
            flex-direction: column; /* Stack children vertically */
            align-items: center; /* Center children horizontally */
        }
    
        .modules {
            /* Center only the table within .form_container */
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
        }
    
        .middle-section {
            /* No need for any changes */
            display: grid;
            justify-content: center;
            align-items: center;
        }
     .details, .name, .STUnumber, .campus, .cname, .curre {
            /* No need for any changes */
            display: grid;
            justify-content: center;
            align-items: center;
        }
    </style>
    
    
</body>
</html>