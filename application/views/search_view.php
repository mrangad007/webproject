<?php
    if($_POST)
    {
        foreach($search_res as $res)
        {
            echo "<br/>";
            echo "<a href=read_more?id=".$res['id']." style=text-decoration:underline>".$res['post_title']."</a>";
            echo "<br/>";
            echo substr($res['post_content'], 0,300);
            echo "<br/>";
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