<div id="root">

    <div class="header-wrap">
        <div class="header">
            <div class="logo">
                <?php print '<a href="/"><img src="'.$logo.'" alt="'.variable_get('site_name', '').'"></a>' ?>
            </div>
            <?php print render($page['title']); ?>
            <?php print render($page['header']); ?>
        </div>
    </div>

    <div class="nav-wrap">
        <div class="nav">
            <?php print theme('links', array('links' => $main_menu)); ?>
        </div>
    </div>
    <div class="slide-show-wrap">
        <div class="slide-show">

        </div>
    </div>

    <div class="body-wrap">
        <div class="body">
            <div class="content_header">
                <?php print render($page['content_header']) ?>
            </div>
            <div class="content">
                <?php print render($page['content']); ?>
            </div>
            <div class="sidebar-first">
                <?php print render($page['sidebar_first']); ?>
            </div>
        </div>
    </div>


    <div class="sidebar-second-wrap">
        <div class="sidebar-second">
            <?php print render($page['sidebar_second']); ?>
        </div>
    </div>

    <div class="footer-wrap">
        <div class="footer">
            <?php print render($page['footer']); ?>
        </div>
    </div>

</div>
<!-- root -->
