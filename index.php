<?php include "connect_database.php" ?>
<?php include "_header.php" ?>
    <h1>Home page</h1>


<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    </tbody>
</table>

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
