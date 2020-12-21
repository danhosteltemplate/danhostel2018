<?php 	 global $data; ?>
<?php if ( get_field('ql_text1','option') ) { ?>
<div class="content-body leftfloater">                    
<div class="borderino" style="padding-bottom:0px;">
<h2 class="page-title" style="margin-bottom:10px;"><strong  class="borderbottom2px" style="padding-bottom:12px;"><?php _e( 'Information','qns' )?></strong></h2>
<div class="undertitle bordertop2px" style="width:100%; height:13px;"></div>
<div class="event-list-wrapper">				
<!-- BEGIN .event-prev -->
<div class="event-prev clearfix">
<ul>
<li><a href="<?php the_field('ql_link1','option'); ?>"><?php the_field('ql_text1','option'); ?></a></li>
<li><a href="<?php the_field('ql_link2','option'); ?>"><?php the_field('ql_text2','option'); ?></a></li>
<li><a href="<?php the_field('ql_link3','option'); ?>"><?php the_field('ql_text3','option'); ?></a></li>
<li><a href="<?php the_field('ql_link4','option'); ?>"><?php the_field('ql_text4','option'); ?></a></li>
<li><a href="<?php the_field('ql_link5','option'); ?>"><?php the_field('ql_text5','option'); ?></a></li>
</ul>
<!-- END .event-prev -->
</div>
</div>
</div>
</div><?php } ?>
