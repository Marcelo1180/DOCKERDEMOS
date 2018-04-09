<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello World!</title>
    </head>
    <body>
        <?php
        $database   = "demodb";
        $user       = "postgres";
        $password   = "Developer";
        $host       = "postgres";
        $connection = new PDO("pgsql:host={$host};dbname={$database}", $user, $password);
        $query      = $connection->query("SELECT * FROM actor");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo "<p>There are no tables in database \"{$database}\".</p>";
        } else {
            echo "<p>Database \"{$database}\" contiene los siguientes elementos:</p>";
            echo "<ul>";
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo "</ul>";
        }
        ?>
    </body>
</html>
