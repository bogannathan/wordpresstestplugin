jQuery(document).ready(function($) {
 $(document).on('click', function (e) {
  $target = $(e.target);
  let background = false
  for (let i of $target[0].classList) {
   if (i == 'backgroundHighlighter') {
    $target.removeClass('backgroundHighlighter')
    background = true
  } else {
   background = false
  }
 }
 if (background == false) {
  $target.addClass('backgroundHighlighter')
 }
})})
