﻿<?php
    $inch = 10;
    echo "<h3>인치 변환</h3>";
    echo "<table border = '1'>";
    echo "<tr>";
    echo "<th width = '100'>인치</th><th width = '100'>센티미터</th>";
    echo "</tr>";

    while($inch <= 100) {
        $cm = $inch * 2.54;
        echo "<tr align = 'center'><td>$inch</td><td>$cm</td></tr>";
        $inch += 10;
    }
    echo "</table>";
?>