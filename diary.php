<?php
/*
 * @Author: 折影轻梦 (https://i.chainwon.com/) 
 * @Date: 2017-12-22 22:34:22 
 * @Last Modified by: 折影轻梦 (https://i.chainwon.com/)
 * @Last Modified time: 2017-12-22 23:20:35
 */
?>
<?php 
/**
 * 日记
 * 
 * @package custom 
 * 
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('head.php');
?>
<body>
    <div id="catui-header">
        <?php $this->need('header.php'); ?>
    </div>
    <div id="catui-content">
        <div class="catui-container">
            <div class="catui-primary detail diary<?php if($this->user->hasLogin()){ echo ' haslogin';}?>">
                <div id="comments" class="catui-item">
                    <div class="detail-header">
                        <div class="detail-background" style="background-image:url(<?php get_post_cover($this->fields->Cover);?>);"></div>
                        <div class="detail-title"><?php $this->title();?></div>
                        <div class="detail-others">
                        <!--  文章标签  -->
                        <div class="detail-others-tags">
                            <a class="mdui-ripple"><?php $this->commentsNum('%d'); ?> 条日记</a>
                        </div>
                        <!--  文章功能按钮  -->
                        <?php if (!empty($this->options->OtherTool) && in_array('share', $this->options->OtherTool)): ?>
                        <div class="detail-others-share"> 
                            <a onclick="get_sider_catui_item_fixed('support');" class="mdui-ripple" style="background: rgb(254, 212, 102);width: inherit;padding: 0 8px;"><i class="fa fa-usd">￥</i> 打赏</a>
                            <a onclick="get_sider_catui_item_fixed('qrcode');" class="mdui-ripple" style="background: rgb(117, 117, 117);width: inherit;padding: 0 8px;"><i class="icon-screen-smartphone"></i> 二维码</a>
                        </div>
                        <?php endif;?>
                    </div><!-- .others -->
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
                    <?php $this->need('comments.php'); ?>
                </div><!-- #comments -->
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