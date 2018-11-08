<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Ajax</title>
</head>
<body>
    <main>
        <div class="img-sec"></div>
        <div class="form-sec">
            <h1>SIGN-UP</h1>
            <form action="#" method="post">
                <!--<h2>Nice to See You</h2>
                <p>Sign in by entering the infromation below</p>-->
                <div class="inputs">
                    <input type="text" placeholder="First Name" name="firstname" id="firstname" list="list1" autocomplete="off">
                    <datalist id="list1">

                    </datalist>
                    <input type="text" placeholder="Last Name" autocomplete="off">
                    <input type="email" placeholder="Email" autocomplete="off">
                    <input type="text" placeholder="Gender" autocomplete="off">
                    <input type="text" placeholder="Ip Address" autocomplete="off">
                    <input type="text" placeholder="Birth Date" autocomplete="off">
                    <input type="text" placeholder="Country Code" autocomplete="off">
                    <input type="text" placeholder="Avatar Url" autocomplete="off">
                    <button>Continue</button>
                </div>
            </form>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>