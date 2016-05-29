<h1 class="widget-title">カテゴリー</h1>

<?php
	$categories = get_categories();
	
	foreach ($categories as $key => $value) {
		$results[$key]['cat_name'] = $value->cat_name;
		$results[$key]['slug'] = $value->slug;
		$results[$key]['url'] = get_bloginfo('url').'/archives/category/'.$results[$key]['slug'];
		$results[$key]['count'] = $value->count;
	
	}
?>
	
<ul class="list-group sidebar-category-list">
<?php
	foreach ($results as $key => $result) {
?>
<a href="<?php echo $result['url']; ?>">
<li class="list-group-item"><span class="badge"><?php echo $result['count']; ?></span><?php echo $result['cat_name']; ?></li>
</a>
<?php		
	}
?>
</ul>
