<?php
$pages = array(
    "add.php" => "Добавить",
    "search.php" => "Найти",
);

$url_array = explode("/", $_SERVER["REQUEST_URI"]);
$active = end($url_array);
?>

<nav class="mobile-menu">
    <div class="container">
        <div class="close"></div>
        <ul class="d-flex flex-column">
            <?php foreach ($pages as $url => $title) : ?>
                <li>
                    <a <?php if ($url === $active) : ?>class="active-link" <?php endif; ?> href="<?php echo $url ?>"><?php echo $title ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>