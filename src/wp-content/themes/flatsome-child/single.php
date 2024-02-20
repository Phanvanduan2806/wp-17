<?php
/**
 * The blog template file.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header();

if (have_posts()) {
    the_post();
    $title = get_the_title();
    $content = get_the_content();
}

$html = <<<EOF
[section label="c-chi-tiet-bai-viet" padding="100px" class="c-chi-tiet-bai-viet"]

[row style="small" h_align="center"]

[col span__sm="12"]

<h1>$title</h1>


[/col]
[col span="7" span__sm="12" span__md="11"]

<p>$content</p>

[/col]

[/row]

[/section]
[section label="meet-team-heading" padding="20px" class="meet-team-heading"]

[row style="small"]

[col span__sm="12" class="pb-0"]

[ux_html]

<h2>BLOG POSTS</h2>
<h3>View more</h3>
[/ux_html]

[/col]

[/row]

[/section]
[section label="c-blog-post" class="c-blog-post"]

[row style="small"]

[col span__sm="12"]

[blog_posts style="normal" type="row" columns="3" columns__sm="1" columns__md="2" posts="3" show_date="false" excerpt="false" comments="false" image_height="50%"]


[/col]

[/row]

[/section]
EOF;
echo do_shortcode($html);
get_footer();
