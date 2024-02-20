<?php
add_shortcode('c_menu', function () {
    $category = get_the_category();
    $slug = null;
    if ($category) {
        $slug = $category[0]->slug;
    }
    $class[$slug] = 'c-menu-current';
    $html = <<<EOF
[ux_stack distribute="center" align="center" gap="2" class="c-menu"]

[ux_image_box img="1243" image_width="80" link="/category/game-bai/" class="{$class['game-bai']}"]

<p>Game bài</p>

[/ux_image_box]
[ux_image_box img="1244" link="/category/game-slot/" class="{$class['game-slot']}"]

<p>Game Slot</p>

[/ux_image_box]
[ux_image_box img="1245" image_width="90" link="/category/live-casino/" class="{$class['live-casino']}"]

<p>Live Casino</p>

[/ux_image_box]
[ux_image_box img="199" link="/category/lo-de/" class="{$class['lo-de']}"]

<p>Lô Đề</p>

[/ux_image_box]
[ux_image_box img="1240" image_width="80" link="/category/the-thao/" class="{$class['the-thao']}"]

<p>Thể thao</p>

[/ux_image_box]
[ux_image_box img="1239" image_width="80" link="/category/khuyen-mai/" class="{$class['khuyen-mai']}"]

<p>Khuyến mãi</p>

[/ux_image_box]
[ux_image_box img="1360" image_width="80" link="/category/huong-dan/" class="{$class['huong-dan']}"]

<p>Hướng dẫn</p>

[/ux_image_box]
[ux_image_box img="1246" image_width="80" link="/category/thu-thuat/" class="{$class['thu-thuat']}"]

<p>Thủ thuật</p>

[/ux_image_box]

[/ux_stack]
EOF;
    return do_shortcode($html);
});