<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація</title>
</head>
<body>
    <h2>Форма реєстрації</h2>
    <form method="post">
        <label>Логін: <input type="text" name="login" required></label><br><br>
        <label>Пароль: <input type="password" name="password" required></label><br><br>
        <label>Підтвердження паролю: <input type="password" name="confirm_password" required></label><br><br>
        <input type="submit" name="submit" value="Зареєструватися">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password']; 

        if (!preg_match("/^[a-zA-Z0-9]+$/", $login)) {
            echo "<p style='color:red;'>Логін може містити лише літери та цифри без спецсимволів.</p>";
        }
        
        elseif ($password !== $confirm_password) {
            echo "<p style='color:red;'>Паролі не збігаються!</p>";
        )
        elseif (!filter_var($login FILTER_SANITIZE_STRING)) {
            echo "<p style='color:red;'>Недопустимий логін.</p>";
        }
        else {
            echo "<p style='color:green;'>Реєстрація успішна!</p>";
        }
    }
    ?>
</body>
</html>