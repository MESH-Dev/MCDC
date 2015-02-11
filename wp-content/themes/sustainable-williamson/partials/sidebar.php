<?php

$sidebarItems = get_field('sidebar');
// check for rows (parent repeater)
if( have_rows('sidebar') ):

  foreach($sidebarItems as $sidebarItem) {

    if($sidebarItem['field_type'] == 'blockquote') {
      foreach($sidebarItem['sidebar_blockquote'] as $sidebarBlockquote) {
        ?>
        <blockquote>
          <?php echo $sidebarBlockquote['sidebar_blockquote_text']; ?>
        </blockquote>
        <?php
      }
    }

    if($sidebarItem['field_type'] == 'button') {
      foreach($sidebarItem['sidebar_button'] as $sidebarButton) {
        ?>

          <a href="<?php echo $sidebarButton['sidebar_button_url']; ?>">
            <div class="btn">
              <div class="btn-headline">
                <span><?php echo $sidebarButton['sidebar_button_headline']; ?></span>
              </div>
              <?php if (strlen($sidebarButton['sidebar_button_body']) > 0) { ?>
                <div class="btn-body">
                  <span><?php echo $sidebarButton['sidebar_button_body']; ?></span>
                </div>
              <?php } ?>
            </div>
          </a>

        <?php
      }
    }

    if($sidebarItem['field_type'] == 'textarea') {
      foreach($sidebarItem['sidebar_textarea'] as $sidebarTextarea) {
        ?>

          <div class="textarea">
            <div class="textarea-headline">
              <span><?php echo $sidebarTextarea['sidebar_textarea_headline']; ?></span>
            </div>
            <div class="textarea-body">
              <span><?php echo $sidebarTextarea['sidebar_textarea_body']; ?></span>
            </div>
          </div>

        <?php
      }
    }

    if($sidebarItem['field_type'] == 'callout') {

      ?>

      <div class="callout">
        <?php echo $sidebarItem['sidebar_callout']; ?>
      </div>

      <?php

    }

  }

endif; ?>
