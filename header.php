<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name"); ?></title>
</head>
<body <?php body_class(); ?>>
<div class="container"> <!-- close div tag in footer -->
    <?php wp_head(); ?>
    <div class="bar"></div>

    <div class="logo"></div>
    <div class="block"></div>
<div class="nav">
    <?php 
        wp_nav_menu(array(
            "theme_location" => "top-menu-list"
        ));
    ?>
</div>
<div class="archive-list" id="navbar" onclick="nav_bar(this)">
    <?php wp_list_categories(); ?>
</div>

<hr>

<script>
    function nav_bar(x) {
        document.getElementById("navbar").classList.toggle("navbar-anim");
        x.classList.toggle("close-navbar");
    }
</script>

</body>
</html>