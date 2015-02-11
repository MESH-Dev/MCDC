<?php

// check if the repeater field has rows of data
if( have_rows('buttons') ):

   // loop through the rows of data
    while ( have_rows('buttons') ) : the_row();

        // display a sub field value

      ?>

        <a href="<?php the_sub_field('button_url'); ?>">
          <div class="btn">
            <div class="btn-headline">
              <span><?php the_sub_field('button_headline'); ?></span>
            </div>
            <?php if (get_sub_field('button_body')) { ?>
              <div class="btn-body">
                <span><?php the_sub_field('button_body'); ?></span>
              </div>
            <?php } ?>
          </div>
        </a>

      <?php

    endwhile;

else :

    // no rows found

endif;

?>

<?php

// check if the repeater field has rows of data
if( have_rows('blockquotes') ):

   // loop through the rows of data
    while ( have_rows('blockquotes') ) : the_row();

        // display a sub field value

      ?>
        <blockquote>
          <?php the_sub_field('blockquote_text'); ?>
        </blockquote>
      <?php

    endwhile;

else :

    // no rows found

endif;

?>

<?php

// check if the repeater field has rows of data
if( have_rows('textareas') ):

   // loop through the rows of data
    while ( have_rows('textareas') ) : the_row();

        // display a sub field value

      ?>
        <div class="textarea">
          <div class="textarea-headline">
            <span><?php the_sub_field('textarea_headline'); ?></span>
          </div>
          <div class="textarea-body">
            <span><?php the_sub_field('textarea_body'); ?></span>
          </div>
        </div>
      <?php

    endwhile;

else :

    // no rows found

endif;

?>
