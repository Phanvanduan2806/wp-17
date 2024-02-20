// APPEND BUTTON
jQuery(async function ($) {
    const postFetcher = new PostFetcher('.c-append-button');
    const posts = await postFetcher.fetch();
    (posts.data ?? []).forEach((post) => {
        const buttonsHTML = `<div class="box-btn">
    <a href="${post?.read_more ?? '#'}" target="_blank" class="button btn-red">
        <span>Read more</span>
    </a>
`;
        const tags = $(`.c-append-button a[href="${post.url}"]`);
        console.log('tags', tags)
        tags.each(function(index, element) {
            const tag = $(this).closest('.post-item').find('.box-text');
            $(buttonsHTML).insertAfter(tag);
        });
    });
});