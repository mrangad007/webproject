<div class="container">
<ul class="pagination">
    <li class="btn btn-success"><?php echo $links ?></li>
</ul>
</div>
<?php
    if($_POST)
    {
        foreach($search_res as $res)
        {
            echo "<a href=# style=text-decoration:underline>".$res['post_title']."</a>";
            echo "<br/>";
            echo substr($res['post_content'], 0,300);
            echo "<br/>";
        }
    }
    if($this->session->userdata('user') != null)
    {
    echo "<div class='panel panel-default'>";
    echo "<div class='panel-body'>";
    echo form_open_multipart('post/do_upload');
    
    echo "<div class=form-group>";
    echo form_label('Name','name');
    echo "&nbsp;&nbsp;";
    echo "<input class=form-control type=text name=post_author value='".$this->session->userdata('user')."' readonly>";
    echo "</div>";

    echo "<br/>\n";

    echo "<div class=form-group>";
    echo form_label('Title','title');
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<input class=form-control type=text name=post_title required>";
    echo "</div>";

    echo "<br/>\n";

    echo "<div class=form-group>";
    echo form_label('Image','image');
    echo "<input class=form-control type=file name=userfile>";
    echo "</div>";

    echo "<br>\n";

    echo "<div class=form-group>";
    echo form_label('Content','content');
    echo "<br>\n";
    echo "<textarea class='form-control' rows='12' name=post_content required></textarea>";
    echo "</div>";

    echo "<br>\n";
    $sub = array(
        'name' => 'post_submit',
        'value' => 'post',
        'class' => 'btn btn-info'
        );
    echo form_submit($sub);
    echo "</form>";
    echo "</div>";
    echo "</div>";
    }
    if($this->session->userdata('user') != null)
    {
    foreach ($pg_res as $col)
    {
        echo "<h2>".$col->post_title."</h2>"; // title,by author, image,read more
        echo "post date: ".$col->post_date;
        echo "<br/><br/>";
        echo "<div class=container>";
        echo "<div class=thumbnail width=400px height=400px>";
        echo "<a href='".base_url()."image/".$col->post_image."' target=_blank>";
        echo "<img src=".base_url()."image/".$col->post_image." width=500px height=500px>";
        echo "</a>";
        echo "</div>";
        echo "</div>";
        echo "<br/><br/>";
        echo substr($col->post_content, 0,300);
        echo " <a href='read_more?id=".$col->id."'>ReadMore</a>";
        echo "<br/>";
        echo "<div style=text-align:right;>posted by: ".$col->post_author."</div>";
        echo "<br/>";
        echo form_open('like');
        echo "<a class='btn btn-info' name='like' href='like/like_cnt?id=".$col->id."'><span class='glyphicon glyphicon-thumbs-up'></span>&nbsp;Like&nbsp;<span class='badge'>".$col->like."</span></a>";
        echo "&nbsp;&nbsp;";
        /*echo "<a class='btn btn-warning' name='dike' href='like/dike_cnt?id=".$col['id']."''><span class='glyphicon glyphicon-thumbs-down'></span>&nbsp;Dike&nbsp;<span class='badge'>".$col['dike']."</span></a>";*/
        echo form_close();
        echo "<br/>";
        echo "<script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<ins class='adsbygoogle'
     style='display:block'
     data-ad-format='fluid'
     data-ad-layout='image-side'
     data-ad-layout-key='-fg+5q+6y-fy+3h'
     data-ad-client='3992246522855385'
     ></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>";
    }
    }
    if($this->session->userdata('user') == null)
    {
    foreach ($pg_res as $col)
    {
        echo "<h2>".$col->post_title."</h2>"; // title,by author, image,read more
        echo "post date: ".$col->post_date;
        echo "<br/><br/>";
        echo "<div class=container>";
        echo "<div class=thumbnail width=400px height=400px>";
        echo "<a href='".base_url()."image/".$col->post_image."' target=_blank>";
        echo "<img src=".base_url()."image/".$col->post_image." width=400px height=400px>";
        echo "</a>";
        echo "</div>";
        echo "</div>";
        echo "<br/><br/>";
        echo substr($col->post_content, 0,300);
        echo " <a href='read_more?id=".$col->id."'>ReadMore</a>";
        echo "<br/>";
        echo "<div style=text-align:right;>posted by: ".$col->post_author."</div>";
        echo "<br/>";
        echo "<div>";
        echo "<script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<ins class='adsbygoogle'
     style='display:block'
     data-ad-format='fluid'
     data-ad-layout='image-side'
     data-ad-layout-key='-fg+5q+6y-fy+3h'
     data-ad-client='3992246522855385'
     ></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>";
        echo "</div>";
    }
    }
    ?>
</div>
<div class="col-md-2"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- right_bar_ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="3992246522855385"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
</div>
</div>
