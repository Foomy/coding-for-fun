
<div class="aboutBlog">
	<h2>
//*********************
//* Ueber dieses Blog *
//*********************
	</h2>
	<p>
		Hier geht es hauptsächlich um Programmierung und allem was damit
		zusammenhängt. Es geht um kleine Projekte denen ich mich in meiner
		Freizeit widme, um die täglichen WTFs denen ich in meinem Beruf
		begegne und was mir sonst noch dazu einfallen könnte.
	</p>
	<p>
		<div class="bold">tl;dr</div>
        <span class="console">cat /dev/brain &gt; blog</span>
	</p>
</div>

<div class="categories">
	<h2>
//*********************
//* Kategorien        *
//*********************
	</h2>
	<ul>
		<?php wp_list_categories('orderby=name&order=ASC&title_li='); ?>
	</ul>
</div>

<div class="archives">
	<h2>
//*********************
//* Archiv            *
//*********************
	</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</div>

<div class="aboutMe">
	<h2>
//*********************
//* Ueber mich        *
//*********************
	</h2>
	<p>
	</p>
</div>