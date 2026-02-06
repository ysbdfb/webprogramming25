<footer>
    <?php
    $filename = basename($_SERVER['PHP_SELF']);

    $last_modified = filemtime($filename);

    $formatted_date = date("d-m-Y H:i:s", $last_modified);

    echo "Last change of ($filename) was: $formatted_date";
    ?>
</footer>
</body>
</html>