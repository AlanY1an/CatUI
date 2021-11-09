<?php
/*
 * @Author: 折影轻梦 (https://i.chainwon.com/) 
 * @Date: 2017-12-22 22:34:22 
 * @Last Modified by: 折影轻梦 (https://i.chainwon.com/)
 * @Last Modified time: 2017-12-22 23:05:55
 */
?>
<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php'); 
?>
<body>
    <div id="catui-header">
        <?php $this->need('header.php'); ?>
    </div>
    <div id="catui-content">
        <div class="catui-container">
            <div class="catui-primary">
                <div class="catui-item catui-item-notfound">
                    <img src="https://www.chainwon.com/static/img/404.png" alt="404">
                    <h1>页面不见啦！<a href="<?php $this->options->siteUrl(); ?>">回到首页</a></h1>
                    <div class="dots">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                </div><!-- .catui-item-list -->
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