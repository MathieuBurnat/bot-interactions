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
    <h2 class="center"> Formulary </h2>
    <h5> User's Data </h5>
    <form action="post">
        <label for="lname">Name</label><br>
        <input type="text" id="lname" name="lname" value="Rionzi"><br>

        <label for="fname"> Firstname</label><br>
        <input type="text" id="fname" name="fname" value="Didier"><br>

        <label for="old">Old</label><br>
        <input type="text" id="old" name="old" value="42"><br><br>

        <h5> Command a cactus </h5>
        <label for="cType">Cactus type</label><br>
        <input type="text" id="cType" name="cType" value="christmas"><br>
        <label for="Amount">Amount</label><br>
        <input type="text" id="Amount" name="Amount" value="4"><br>

        <h5> Launch Bot's experiments <i class="material-icons right" style="color:#90b1ae;">cloud</i></h5>
        <div class="center">
            <a onclick="initBot();" class="waves-effect waves-light btn">
                <i class="material-icons right">bug_report</i>
                Initialize the Bot
            </a>
            <a onclick="command();" class="waves-effect waves-light btn">
                <i class="material-icons right">beach_access</i>
                Send a Command
            </a>
        </div>


    </form>

    <p class="center">Click on buttons to launch the Bot's experiments :)</p>

    <?php include("src/chatbot.php"); ?>

</body>

</html>

<script src="src/bot.js"></script>
<script>
    let bot = null;
    function initBot() {
        console.log("----------------------");
        console.log("First experimentation : Initialize the chatbox");
        console.log("--> Initialize the chatbox");
        console.log("--> Speak directly to the client");
        console.log("Note : Here the interface doesn't communicate userData to the bot");

        // get user's data
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

    function command() {
        console.log("----------------------");
        console.log("Second experimentation : Call an intent if the client clicks on the button");
        console.log("--> If the data from the command are filled, the bot will directly command a cactus");

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