<?php include "connect_database.php" ?>
<?php include "_header.php" ?>
    <h1>Home page</h1>

<a href="create.php" class="btn btn-success">Додати нового телесика</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
        $res = $connect->query("SELECT Id, Name, Email FROM tblusers");
        $counter=0;
        while ($row = $res->fetch_assoc()) {
            $counter++;
            echo "
            <tr>
                <th scope=\"row\">{$counter}</th>
                <td>{$row['Name']}</td>
                <td>{$row['Email']}</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"#\" data-id=\"{$row['Id']}\" role=\"button\">Edit</a>
                    <a class=\"btn btn-danger\" href=\"#\" data-id=\"{$row['Id']}\" role=\"button\">Delete</a>
                <td>
            </tr>
            ";
        }
    ?>
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
