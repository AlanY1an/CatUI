<?php
/*
 * @Author: 折影轻梦 (https://i.chainwon.com/) 
 * @Date: 2017-12-22 22:34:22 
 * @Last Modified by: 折影轻梦 (https://i.chainwon.com/)
 * @Last Modified time: 2017-12-22 23:13:29
 */
?>
<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php'); 
?>
<body class="single">
    <div id="catui-header">
        <?php $this->need('header.php'); ?>
    </div>
    <div id="catui-content">
        <div class="catui-container">
            <div class="catui-primary detail">
                <div class="catui-item">
                    <div class="detail-header">
                        <div class="detail-background" style="background-image:url(<?php get_post_cover($this->fields->Cover);?>);"></div>
                        <div class="detail-title"><?php $this->title();?></div>
                        <div class="detail-intro">
                            <ul class="detail-intro-meta">
                                <li><?php $this->date('Y年n月d日'); ?></li>
                                <li><?php $this->commentsNum('%d'); ?>评论</li>
                                <li><?php art_count($this->cid); ?>汉字</li>
                                <li><?php get_post_view($this) ?>围观</li>
                            </ul>
                        </div>
                    </div>
                    <div class="detail-border">
				        <div></div>
				        <div></div>
				        <div></div>
				        <div></div>
				        <div></div>
				        <div></div>
				        <div></div>
				        <div></div>
		        	</div>
                    <article class="detail-article">
                    <?php
                    $str = preg_replace('#<a href="(.*?)">(.*?)</a>#','<a href="$1" target="_blank" >$2</a>',$this->content);
                    $str = preg_replace('#\@\((.*?)\)#','<img src="//i.chainwon.com/usr/themes/catui/newpaopao/$1.png" class="biaoqing">',$str);
                    echo $str;
                    ?>
                    </article>
        
                    <div class="detail-others">
                        <!--  文章标签  -->
                        <div class="detail-others-tags"><?php $this->tags(' ', true); ?></div>
                    </div><!-- .others -->
                </div><!-- .catui-item -->
                <div id="comments" class="catui-item"><?php $this->need('comments.php'); ?></div><!-- #comments -->
            </div><!-- .catui-primary -->
            <div class="catui-secondary" id="sider">
                <?php $this->need('sider.php'); ?>
            </div><!-- .catui-secondary -->
        </div><!-- .catui-container -->
    </div>
    
    <div id="catui-footer">
        <?php $this->need('footer.php'); ?>
    </div>
</body>
</html>