$(function() {
    hljs.initHighlightingOnLoad();
    $('#paste pre').each(function(i, element) {
        hljs.highlightBlock(element)
    });
});