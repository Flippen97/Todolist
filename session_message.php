<?php
if (isset($_SESSION['success'])){
    echo "<p class='flash-success'>".$_SESSION['success']."</p>";
    unset($_SESSION['success']);
}
if (isset($_SESSION['Error'])){
    echo "<p class='flash-error'>".$_SESSION['Error']."</p>";
    unset($_SESSION['Error']);
}