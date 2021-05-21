<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire-html</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="form.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div><label for="password">password:</label></div>
    <input type="password" id="password" name="user_password">
    <div>
        <label for="birthdate">birthdate :</label>
        <input type="date" name="user_birthdate">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div>
        <button type="submit">soumettre</button>
        <button type="reset">effacer</button>
    </div>
    </form>

    <script src="main.js"></script>
</body>
</html>