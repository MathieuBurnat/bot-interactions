<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <h3 class="center"> Formulary </h3>
    <form action="post">
        <label for="lname">Nom</label><br>
        <input type="text" id="lname" name="lname" value="Rionzi"><br>

        <label for="fname"> Prénom</label><br>
        <input type="text" id="fname" name="fname" value="Didier"><br>

        <label for="old">Age</label><br>
        <input type="text" id="old" name="old" value="42"><br><br>
        <div class="center">
            <a onclick="experiment1();" class="waves-effect waves-light btn">
                <i class="material-icons right">cloud</i>
                Launch Bot's experiments
            </a>
            <a onclick="experiment2();" class="waves-effect waves-light btn">
                <i class="material-icons right">beach_access</i>
                Test
            </a>
        </div>
    </form>
    <p class="center">Click on this button to launch the Bot's experiment :)</p>

    <?php include("src/chatbot.php"); ?>

</body>

</html>

<script src="src/bot.js"></script>
<script>
    let bot = null;
    function experiment1() {
        // get user's informations
        const userData = {
            lastName: document.getElementById('lname').value,
            firstName: document.getElementById('fname').value,
            old: document.getElementById('old').value,
        }

        console.log("User's informations :");

        console.log(userData.lastName);
        console.log(userData.firstName);
        console.log(userData.old);

        // Create the bot
        bot = new Bot(userData);
        bot.displayMessages();
    }

    function experiment2() {
        bot.test();
    }
</script>

<style>
    body {
        width: 50%;
        margin: auto;
        padding-top: 5em;
    }
</style>