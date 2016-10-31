<?php

function get_popular_post($days){
			global $wpdb;
			$day = $days;
			$getDays = "- $day days";
			$weekstart = date('Y-m-d', strtotime($getDays));
			$query = $wpdb->prepare("
			  SELECT comment_post_id, count( comment_post_id ) AS c, SUBSTRING( comment_date, 1, 10 ) AS d
			  FROM        $wpdb->comments
			  WHERE       (comment_date >= %s)
			  GROUP BY comment_post_id
			  ORDER BY c DESC , d DESC
			  ",$weekstart);
			
			
			
			$col_ids = $wpdb->get_col($query);
			if ($col_ids) {
				  $args=array(
					'post__in' => $col_ids,
					'ignore_sticky_posts'=>true,
					'numberposts'   => 5,
					'post_type' 		=> 'post', 
					'orderby' 			=> 'comment_count',
					'order' 				=> 'DESC',
					'posts_per_page' => 5,
					'post_status' 		=> 'publish',
				  );
				  return ($args);
				 // return get_posts($args);
			 } 
			 else 
			 {return false; }

}
?>