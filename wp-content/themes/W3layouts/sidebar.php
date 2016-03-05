<div class="navigation">

  		    	<?php 
  		    	$defaults = array(
                'theme_location' => 'primary',

                'menu'            => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'nav',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 2,
                'walker'          => ''
                );
            echo wp_nav_menu( $defaults );


           
					/**
					<ul class="nav">
						<li>
							<a href="index.html">Home</a>
						</li>
						
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>*/
					 ?>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>