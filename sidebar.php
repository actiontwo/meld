<?php

/**

 * The Sidebar containing the main widget area

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */

?>







<div class="col-md-4">

                        	<aside class="side_bar_blog">

                            	<div class="recent_post_main">

                                	<h2>Related Categories</h2>

                                    <div class="recent_post_box">

                                    	
                                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Categories')) :endif; ?>

                                    </div>

                                </div>

                            </aside>

                        </div>

