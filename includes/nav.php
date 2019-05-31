<?php
    $pages = array(
        "registration.php" => "Регистрация",
        "search.php" => "Поиск"
    );

    $url_array = explode("/", $_SERVER["REQUEST_URI"]);
    $active = end($url_array);
?>

<nav class="menu">
    <ul class="d-flex justify-content-end">
        <?php foreach($pages as $url => $title):?>
            <li class="p-4">
                <a <?php if($url === $active):?>class="active-link"<?php endif;?> href="<?php echo $url?>"><?php echo $title?></a>
            </li>
        <?php endforeach;?>
    </ul>
</nav>