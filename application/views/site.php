<?php
/**
 * This is main template in full HTML5 elements
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?php if (isset($meta_tag)) echo $meta_tag . "\n"; ?>
        <title><?php if (isset($title)) echo $title; ?></title>
        <?php
        if (isset($css))
            echo $css . "\n";
        if (isset($js))
            echo $js . "\n";
        ?>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    </head>
    <body>
        <section id="contener">
            <header id="header">
                <nav id="menu">
                    <?php
                    if (isset($menu))
                        echo $menu . "\n";
                    ?>
                    <div id="zwin"></div>
                </nav>
                <div id="rozwin"></div>
                <hgroup id="logo">
                    <?php
                    if (isset($header))
                        echo $header . "\n";
                    ?>
                </hgroup>
                <footer>
                    <?php
                    if (isset($breadcrumb)) {
                        echo $breadcrumb . "\n";
                    }
                    ?>
                </footer>
            </header>
            <nav id="left_panel">
                <?php
                if (isset($category))
                    echo $category . "\n";
                ?>
            </nav>
            <section id="center">
                <article>
                    <?php
                    if (isset($center))
                        echo $center . "\n";
                    ?>
                </article>
            </section>
            <footer id="footer">
                <?php
                if (isset($footer))
                    echo $footer . "\n";
                ?>
            </footer>
        </section>
    </body>
</html>