<?php include "_header.php" ?>
<h1>Contect page</h1>
<?php
$a=23;
if($a=='23') {
    echo "a===23";
}

echo "<h2>Hello php</h2>";
?>
<h3>For</h3>
<ul>
    <?php
    for($i=0;$i<10;$i++) {
        echo '<li>'.($i+1).'</li>';
    }
    ?>
</ul>
<?php include "_footer.php" ?>