$(function() {
  $('body').addClass(
    ('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch ? 
    'touch' :
    'no-touch'
  );
});
