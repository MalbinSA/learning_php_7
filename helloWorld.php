<?php
if ($_POST['user']) {
    echo "Hello, " . $_POST['user'] . "!";
} else {
    print <<< _HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="user"/>
<br>
<button type="submit">Say Hello</button>
</form>
_HTML_;

}
?>