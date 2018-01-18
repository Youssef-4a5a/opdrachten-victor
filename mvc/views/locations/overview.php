<h1>Locaties</h1>
<table>
    <tr>
        <th>ID</th>  
        <th>Location</th>
    </tr>
        <?php
        foreach ($arr as $array) {
            echo '<tr>';
            foreach ($array as $key => $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        ?> 
</table>
