<?php
echo form_open('search');
    echo "<div class=row>";
    echo "<div class=col-md-10>";
    echo "<input type=text style='width:100%;height:40px;' name=post_search placeholder=search>";
    echo "</div>";
    echo "<div class=col-md-2>";
    $search = array(
        'name' => 'post_search_submit',
        'value' => 'search',
        'class' => 'btn btn-info'
        );
    echo form_submit($search);
    echo "</div>";
    echo "</div>";
    
    echo form_close();
?>