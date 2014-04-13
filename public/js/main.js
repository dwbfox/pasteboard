alert = function() {
    console.trace();
}

$(function() {


    // Initialize highlight.js
    hljs.initHighlightingOnLoad();
    $('#paste pre').each(function(i, element) {
        hljs.highlightBlock(element)
    });

    $('input[name="tags"]').tagsManager({
        maxTags: 5,
        delimiters: [9, 13, 32, 44] // tab, enter, comma
    });
});
