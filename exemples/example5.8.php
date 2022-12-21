<?php

function page_header5($color, $title, $header = 'Welcome'){
    echo '<html><head><title> Welcome to ' . $title . '</title><head>';
    echo '<body bgcolor="#' . $color . '">';
    echo "<h1>$header</h1>";
}

page_header5('66cc99', 'my wonderful page');

page_header5('66cc99', 'my wonderful page', 'This page is great!');