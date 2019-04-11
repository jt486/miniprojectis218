<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Contact List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="favicon/favicon.ico"/>
</head>
<body>
<h1>My Contact List</h1>
<div>
    <?php
    function table_php($filename, $header=false) {
        $handle = fopen($filename, "r");
        echo '<table>';
//display header row if true
        if ($header) {
            $record = fgetcsv($handle);
            echo '<tr>';
            foreach ($record as $header_column) {
                echo "<th>$header_column</th>";
            }
            echo '</tr>';
        }
// displaying contents
        while ($record = fgetcsv($handle)) {
            echo '<tr>';
            foreach ($record as $column) {
                echo "<td>$column</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
        fclose($handle);
    }
    table_php('data.csv',true);
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>