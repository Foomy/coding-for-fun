<aside>
  <div class="aboutBlog">
    <h3 class="c64User">Was 'n das hier?</h3>
    <p>
      Hier geht es hauptsächlich um Programmierung und allem was damit
      zusammenhängt. Es geht um kleine Projekte denen ich mich in meiner
      Freizeit widme, um die täglichen WTFs denen ich in meinem Beruf
      begegne und was mir sonst noch dazu einfallen könnte.
    </p>
    <p>
      <span class="bold">tl;dr:</span>
      <span class="console">cat /dev/brain &gt; blog</span>
    </p>
  </div>

  <div class="categories">
    <h3 class="c64User">Kategorien</h3>
    <ul>
      <?php wp_list_categories('orderby=name&order=ASC&title_li='); ?>
    </ul>
  </div>

  <div class="archives">
    <h3 class="c64User">Archiv</h3>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </div>
</aside>