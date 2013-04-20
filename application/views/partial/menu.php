<?php

/**
 * Menu for site
 */

echo "<ul>";
echo "<li>" . HTML::anchor('/', 'Strona Główna') . "</li>";
echo "<li>" . HTML::anchor('', 'Witryna') . "</li>";
echo "<li>" . HTML::anchor('application/menu/show', 'Menu') . "</li>";
echo "<li>" . HTML::anchor('application/article/show', 'Artykuły') . "</li>";
echo "<li>" . HTML::anchor('', 'Pomoc') . "</li>";
echo "</ul>";

