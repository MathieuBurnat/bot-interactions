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
    <h3> Formulary </h3>
    <form action="post">
        <label for="lname">Nom</label><br>
        <input type="text" id="lname" name="lname" value="Rionzi"><br>

        <label for="fname"> Prénom</label><br>
        <input type="text" id="fname" name="fname" value="Didier"><br>

        <label for="old">Age</label><br>
        <input type="text" id="old" name="old" value="54"><br><br>

        <a onclick="experiment();" class="waves-effect waves-light btn center">
            <i class="material-icons right">cloud</i>
            Launch Bot's experiments
        </a>

    </form>
    <p>Click on this button to launch the Bot's experiments :)</p>

    <?php include("src/bot.php"); ?>

</body>

</html>

<script>
    function experiment() {
        // get user's informations
        const lastName = document.getElementById('lname').value;
        const firstName = document.getElementById('fname').value;
        const old = document.getElementById('old').value;

        console.log("User's informations :");

        console.log(lastName);
        console.log(firstName);
        console.log(old);

        // Create a message
        const message = "Hey " + firstName + ", haven't you " + old + " years old ? This is moment for you to buy a beautiful and fresh cactus ! :)";

        // Send a message
        const dfMessenger = document.querySelector('df-messenger');
        dfMessenger.renderCustomText(message);

        const payload = [{
            "type" : "image",
            "rawUrl": "https://c.tenor.com/GbutACtJBTMAAAAd/cat.gif"
        }];
        dfMessenger.renderCustomCard(payload);
    }
</script>

<style>
    body {
        width: 50%;
        margin: auto;
        text-align: center;
        padding-top: 20%;
    }
</style>