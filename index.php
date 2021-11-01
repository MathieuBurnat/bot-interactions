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
    <form action="/action_page.php">
        <label for="lname">Nom</label><br>
        <input type="text" id="lname" name="lname" value="Rionzi"><br>

        <label for="fname"> Prénom</label><br>
        <input type="text" id="fname" name="fname" value="Didier"><br>

        <label for="old">Age</label><br>
        <input type="text" id="old" name="old" value="54"><br><br>

        <a class="waves-effect waves-light btn center"><i class="material-icons right">cloud</i>Launch Bot's experiments </a>
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</body>

</html>

<style>
body {
    width: 50%;
    margin: auto;
    text-align: center;
    padding-top: 20%;
}
</style>