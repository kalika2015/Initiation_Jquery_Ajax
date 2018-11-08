<?php
include ('connexion.php');
$fname = fname();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Ajax</title>
</head>
<body>
    <main>
        <div class="img-sec"></div>
        <div class="form-sec">
            <h1>SIGN-UP</h1>
            <form action="#" method="post">
                <h2>Nice to See You</h2>
                <p>Sign in by entering the infromation below</p>
                <div class="inputs">
                    <input type="text" placeholder="First Name" name="firstname" id="firstname" list="list1" autocomplete="false">
                    <datalist id="list1">
                        <?php  while($row1 = $fname->fetch())
                        {?>
                        <option value="<?= $row1["first_name"]?>">
                        <?php
                        }?>
                    </datalist>
                    <input type="text" placeholder="Last Name" autocomplete="true">
                    <input type="email" placeholder="Email" autocomplete="true">
                    <input type="text" placeholder="Gender" autocomplete="true">
                    <input type="text" placeholder="Ip Address" autocomplete="true">
                    <input type="text" placeholder="Birth Date" autocomplete="true">
                    <input type="text" placeholder="Country Code" autocomplete="true">
                    <input type="text" placeholder="Avatar Url" autocomplete="true">
                    <button>Continue</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>