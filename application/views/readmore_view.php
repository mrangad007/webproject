<?php
if($this->session->userdata('user') != null)
    {
    foreach ($readmore as $col) 
    {
        echo "<a class='btn btn-success' style='float:right' href='".base_url()."'>Back</a>";
        echo "<h2>".$col['post_title']."</h2>"; // title,by author, image,read more
        echo "post date: ".$col['post_date'];
        echo "<br/><br/>";
        echo "<div class=container>";
        echo "<div class=thumbnail width=400px height=400px>";
        echo "<a href='".base_url()."image/".$col['post_image']."' target=_blank>";
        echo "<img src=".base_url()."image/".$col['post_image']." width=500px height=500px>";
        echo "</a>";
        echo "</div>";
        echo "</div>";
        echo "<br/><br/>";
        echo $col['post_content'];
        echo "<br/>";
        echo "<div style=text-align:right;>posted by: ".$col['post_author']."</div>";
        echo "<br/>";
        echo form_open('like');
        echo "<a class='btn btn-info' name='like' href='like/like_cnt?id=".$col['id']."'><span class='glyphicon glyphicon-thumbs-up'></span>&nbsp;Like&nbsp;<span class='badge'>".$col['like']."</span></a>";
        echo "&nbsp;&nbsp;";
        /*echo "<a class='btn btn-warning' name='dike' href='like/dike_cnt?id=".$col['id']."''><span class='glyphicon glyphicon-thumbs-down'></span>&nbsp;Dike&nbsp;<span class='badge'>".$col['dike']."</span></a>";*/
        echo form_close();
    }
}
if($this->session->userdata('user') == null)
    {
    foreach ($readmore as $col) 
    {
        echo "<a class='btn btn-success' style='float:right' href='".base_url()."'>Back</a>";
        echo "<h2>".$col['post_title']."</h2>"; // title,by author, image,read more
        echo "post date: ".$col['post_date'];
        echo "<br/><br/>";
        echo "<div class=container>";
        echo "<div class=thumbnail width=400px height=400px>";
        echo "<a href='".base_url()."image/".$col['post_image']."' target=_blank>";
        echo "<img src=".base_url()."image/".$col['post_image']." width=400px height=400px>";
        echo "</a>";
        echo "</div>";
        echo "</div>";
        echo "<br/><br/>";
        echo $col['post_content'];
        echo "<br/>";
        echo "<div style=text-align:right;>posted by: ".$col['post_author']."</div>";
        echo "<br/>";
    }
}
?>