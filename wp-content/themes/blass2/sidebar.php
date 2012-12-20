<div id="sidebar">

<?php if (is_home()) { ?>

      <h2>About this Blog</h2>

      <p class="news">A little something about you, the author. Nothing lengthy, just an overview. Open sidebar.php and change this line.
      </p>

<?php } ?>

<?php if (is_single()) { ?>

      <h2>About this Entry</h2>

      <p class="news">

      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> was posted on <nobr><?php the_time('F jS, Y') ?></nobr> at <nobr><?php the_time('g.ia') ?></nobr> and is filed under <?php the_category(', ') ?>.<?php if ('open' == $post->comment_status) : ?> This entry has <?php comments_number('no comments (yet)', 'one comment', '% comments' );?>.  You can follow any responses through the <?php comments_rss_link('RSS 2.0 Feed'); ?><?php endif; ?>.</a>
      </p>

<?php } ?>


<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>



<h2>New Entries</h2>
<?php $today = current_time('mysql', 1);
if ( $recentposts = $wpdb->get_results("SELECT ID, post_title FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND post_date_gmt < '$today' ORDER BY post_date DESC LIMIT 10")): ?>
<ul>
<?php foreach ($recentposts as $post) { if ($post->post_title == '') $post->post_title = sprintf(__('Post #%s'), $post->ID);
echo "<li><a href='".get_permalink($post->ID)."'>"; the_title(); echo '</a></li>'; } ?>
</ul>

<?php endif; ?>

<?php if (function_exists('get_recent_comments')) { ?>
<li><h2>Newest comments</h2>
<ul>
<?php get_recent_comments(); ?>
</ul>
</li>
<?php } ?>

<h2>Categories</h2>
<ul>
<?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
</ul>


 <h2>Monthly Archives</h2>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>

<?php if (is_home()) { ?>
<h2><?php _e('Blogroll'); ?></h2>
<ul>
<?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>
</ul>
<?php } ?>

<h2>Syndication (RSS)</h2>
<ul>
<li><a href="<?php bloginfo('rss2_url'); ?>">RSS 2.0 Entries</a></li>
<li><a href="<?php bloginfo('comments_rss2_url'); ?>">RSS 2.0 Comments</a></li>
</ul>

<?php function swg_is_admin_logged() {
// Checks whether admin is logged or not
global $userdata;
get_currentuserinfo();
if ( intval($userdata->user_level) >= 10 ) {
return true;
} else {
return false;
}
}?>

<?php
// Begin: Admin Menu
if (swg_is_admin_logged()) {
// Get number of posts
$adminmenu_numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish'");
if (0 < $adminmenu_numposts) $adminmenu_numposts = number_format($adminmenu_numposts);
// Get number of pages
$adminmenu_numpages = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'static'");
if (0 < $adminmenu_numpages) $adminmenu_numpages = number_format($adminmenu_numpages);
// Get number of comments
$adminmenu_numcomms = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '1'");
if (0 < $adminmenu_numcomms) $adminmenu_numcomms = number_format($adminmenu_numcomms);
echo '<h2>Administration</h2>' . "\n";
echo '<ul>';
echo '<li><a title="Write a new Entry" href="/wp-admin/post-new.php">Write a new Entry</a></li>';
echo '<li><a title="Manage all Entries" href="/wp-admin/edit.php">Manage Entries (' . $adminmenu_numposts . ') </a></li>';
echo '<li><a title="Manage Comments" href="/wp-admin/edit-comments.php">Manage Comments (' . $adminmenu_numcomms . ') </a></li>';
echo '<li><a title="Add a Link to your Blogroll" href="/wp-admin/link-add.php">Add a Link</a></li>';
echo '<li><a title="General settings" href="/wp-admin/options-general.php">General Settings</a></li>';
echo '<li><a title="Change the looks" href="/wp-admin/theme-editor.php">Theme Editor</a></li>';
echo '<li><a title="Manage Plugins" href="/wp-admin/plugins.php">Manage Plugins</a></li>';
echo '<li><a title="Log out of this account" href="/wp-login.php?action=logout">Log out &raquo;</a> </li>';
echo '</ul>';
echo "\n" . ' <!-- admin-menu -->' . "\n";
}
else
{
echo '<h2>Meta</h2>' . "\n";
echo '<ul>';
echo '<li><a title="Login to your existing Account" href="/wp-login.php">Login</a></li>';
echo '<li><a title="Create an Account" href="/wp-login.php?action=register">Register</a></li>';
echo '<li><a title="No problem!" href="/wp-login.php?action=lostpassword">Lost Password?</a> </li>';
echo '</ul>';
echo "\n" . ' <!-- admin-menu -->' . "\n";
}
// End: Admin Menu
?>

<h2>Search</h2>

<ul>

<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input type="submit" id="sidebarsubmit" value="Find!" />

 </form>

 </ul>

<?php endif; ?>

</div>