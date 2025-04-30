<?php
session_start();

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
    setcookie('email', '', time() - 3600);
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    setcookie('email', $email, time() + (7 * 24 * 60 * 60)); // 7 днів

    header("Location: index.php");
    exit();
}

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $cookieEmail = $_COOKIE['email'] ?? 'не збережено';
    ?>
    <!DOCTYPE html>
    <html>
    <head><title>Профіль</title></head>
    <body>
        <h1>Вітаємо, <?php echo htmlspecialchars($name); ?>!</h1>
        <p>Ваш email: <?php echo htmlspecialchars($email); ?></p>
        <p>Ваш email запам'ятали: <?php echo htmlspecialchars($cookieEmail); ?></p>
        <a href="index.php?action=logout"><button>Вийти</button></a>
    </body>
    </html>
    <?php
    exit();
}

?>
<!DOCTYPE html>
<html>
<head><title>Реєстрація</title></head>
<body>
    <h1>Реєстрація</h1>
    <form method="post">
        Ім’я: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Пароль: <input type="password" name="password" required><br>
        <button type="submit">Зареєструватися</button>
    </form>
</body>
</html>
