
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

include 'header.inc';
?>

<h2>Welcome Page</h2>

<p>
    Welcome,
    <?php echo htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8'); ?>!
</p>

<p>You have successfully logged in.</p>

<?php
include 'footer.inc';
?>
