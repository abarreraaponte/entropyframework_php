<!-- example.com/src/pages/hello.php -->
Goodbye <?= htmlspecialchars(isset($name) ? $name : 'World', ENT_QUOTES, 'UTF-8') ?>
