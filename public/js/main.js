$(function() {


    // Initialize highlight.js
    hljs.initHighlightingOnLoad();
    $('#paste pre').each(function(i, element) {
        hljs.highlightBlock(element)
    });
});