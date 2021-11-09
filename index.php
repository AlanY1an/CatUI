<?php 
/**
 * Cat UI 情托于物。人情冷暖，世态炎凉。
 * @package Cat UI 
 * @author 折影轻梦 
 * @version 2.2
 * @link http://i.chainwon.com/ 
 * @Date: 2017-12-22 22:34:22 
 * @Last Modified by: 折影轻梦 (https://i.chainwon.com/)
 * @Last Modified time: 2017-12-22 23:06:37
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
            <div class="catui-primary"> 
                <div class="catui-item-list catui-item">
                    <?php while($this->next()): ?>
                    <div class="catui-item-list-block">
                        <a class="catui-item-list-block-cover" href="<?php $this->permalink() ?>">
                            <?php Cover($this->cid,$this->fields->Cover); ?>
                        </a>
                        <div class="catui-item-list-block-meta">
                            <a><?php $this->date('Y年n月d日');?></a>
                            <a><?php art_count($this->cid);?> 汉字</a>
                            <a><?php get_post_view($this);?> 围观</a>
                            <a><?php $this->commentsNum('%d'); ?> 评论</a>
                            <?php $this->category(','); ?>
                            <?php $this->tags(' ', true); ?>
                        </div>
                        <article class="catui-item-list-block-content">
                            <?php $this->content('更多'); ?>
                        </article>
                </div>
                    <?php endwhile; ?>
                </div><!-- .catui-item-list -->
                <?php $this->pageNav(); ?>
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