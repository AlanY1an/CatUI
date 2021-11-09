<?php
/*
 * @Author: 折影轻梦 (https://i.chainwon.com/) 
 * @Date: 2017-12-22 22:34:22 
 * @Last Modified by: 折影轻梦 (https://i.chainwon.com/)
 * @Last Modified time: 2017-12-22 23:13:34
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="header">
    <div class="header-canopy">
        <div class="header-canopy-cover" style="background-image: url(<?php
        if ($this->is('post') || $this->is('page')) :
           get_post_cover($this->fields->Cover);
        else:
            $this->options->background();
        endif;
        ?>);"></div>
        <div class="header-canopy-cover-bk"></div>
        <div class="header-canopy-menu">
            <div class="catui-container">
                <div class="header-canopy-menu-title"><?php echo $this->options->title(); ?></div>
                <div class="header-canopy-menu-avatar">
                    <a href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->logoUrl();?>"></a>
                </div>
                <div class="header-canopy-menu-content mdui-fab-wrapper" id="menu-nav">
                    <div class="header-canopy-menu-btn mdui-ripple mdui-color-red-400" onclick="get_sider_catui_item_fixed('support');">
                        <i class="mdui-icon material-icons">local_atm</i>
                    </div>
                    <div class="header-canopy-menu-btn mdui-ripple mdui-fab">
                        <i class="mdui-icon material-icons">menu</i>
                        <i class="mdui-icon mdui-fab-opened material-icons">close</i>
                    </div>
                    
                    <?php if (!empty($this->options->Sider) && in_array('qrcode', $this->options->Sider)): ?>
                    <div class="header-canopy-menu-btn mdui-ripple mdui-color-grey-700" onclick="get_sider_catui_item_fixed('qrcode');">
                        <i class="mdui-icon material-icons">center_focus_weak</i>
                    </div>
                    <?php endif;?>
                    
                    <div class="mdui-fab-dial">
                        
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a class="mdui-fab mdui-fab-mini mdui-ripple" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="mdui-fab mdui-fab-hide mdui-ripple mdui-fab-fixed" onclick="get_to_top();"><i class="mdui-icon material-icons"></i></button>
</div>