<?php

/**
 * @file
 * touch theme implementation to display a block.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 */
?>
    <div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>" <?php print $attributes; ?>>
        <div class="module">
            <?php print render($title_prefix); ?>
            <div class="module-header">
                <div class="module-title">
                    <?php if (!empty($block->subject)): ?>
                    <h2>
                        <?php print $block->subject ?>
                    </h2>
                    <?php endif;?>
                </div>
            </div>
            <?php print render($title_suffix); ?>

            <div class="module-content" <?php print $content_attributes; ?>>
                <?php print $content; ?>
            </div>

        </div>
    </div>
    <!-- /.block -->

