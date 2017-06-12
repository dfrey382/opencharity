<?php
/**
 * @file
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>


    <header class="header-wrapper">
        <div class="wrapper-container">
            <div class="header">
                <div class="logo">
                    <?php if ($logo): ?>
                    <div id="logo" class="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img alt="Logo" src="<?php print $logo; ?>"/></a></div>
                    <?php endif; ?>



                </div>
                <?php if ($page['header-right']): ?>
                <div class="right-module">
                    <?php print render($page['header-right']); ?>
                </div>
                <?php endif; ?>
                <div class="menu">
                    <nav role="navigation">
                        <?php print theme('links', array('links' => menu_navigation_links('main-menu'), 'attributes' => array('class'=> array('links', 'main-menu')) ));?>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <section class="hero-image">
        <div class="wrapper-container">
            <?php if ($page['hero-image']): ?>
            <div class="hero-image-module">
                <div class="hero-image-module-inner">
                    <?php print render($page['hero-image']); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if ($page['events']): ?>
    <section id="events">
        <div class="wrapper-container">

            <div class="event">
                <?php print render($page['events']); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

   <?php if ($page['features']): ?>
        <section class="features">
            <div class="wrapper-container">
               
                <div class="feature grid-op-twelve">
                    <?php print render($page['features']); ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        
        <section class="missions">
            <div class="wrapper-container">
                <?php if ($page['missions']): ?>
                <div class="mission grid-op-twelve">
                    <?php print render($page['missions']); ?>
                </div>
                <?php endif; ?>
                <hr class="divider grid-op-twelve">
         <?php if ($page['members']): ?>
        <div class="members grid-op-twelve">
            <?php print render($page['members']); ?>
        </div>
        <?php endif; ?>
            </div>

        </section>
        

    <main class="general-layout content-inner" id="content">
        <?php if (!empty($tabs['#primary'])): ?>
        <div class="tabs-wrapper">
            <?php print render($tabs); ?>
        </div>
        <?php endif; ?>
        <?php print $messages; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
        <ul class="action-links">
            <?php print render($action_links); ?>
        </ul>
        <?php endif; ?>

        <?php if (!drupal_is_front_page()) { ?>
        <?php print render($page['content']); ?>
        <?php } ?>
      

      

    </main>
  
        <?php if ($page['blog']): ?>
        <section class="blog" id="blog">
                 <div class="wrapper-container">
            <?php print render($page['blog']); ?>
        </div></section>
        <?php endif; ?>
    <footer id="footer" class="footer">
        <div class="wrapper-container">
            <?php if ($page['footer']): ?>
             <div class="footer grid-op-twelve">
            <?php print render($page['footer']) ?>
                 </div>
            <?php endif; ?>
            
             <?php if ($page['copyright']): ?>
        <div class="copyright grid-op-twelve">
            <?php print render($page['copyright']); ?>
        </div>
        <?php endif; ?>
        </div>
    </footer>
