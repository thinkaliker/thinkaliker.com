WebFontConfig = {
  google: {
    families: ['Roboto::latin']
  }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

(function(i, s, o, g, r, a, m) {
  i['GoogleAnalyticsObject'] = r;
  i[r] = i[r] || function() {
    (i[r].q = i[r].q || []).push(arguments)
  }, i[r].l = 1 * new Date();
  a = s.createElement(o),
  m = s.getElementsByTagName(o)[0];
  a.async = 1;
  a.src = g;
  m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-37558861-4', 'auto');
ga('send', 'pageview');

(function() {
  var bgimage = new Image();
  bgimage.src = "http://cdn.thinkaliker.com/background.jpg";
  $("#bg").hide();
  $(bgimage).load(function() {
    $("#bg").css("background-image", "url(" + $(this).attr("src") + ")").css("background-repeat", "no-repeat").css("background-position", "center center").css("background-size", "cover").fadeIn(1000);
  });
})();

$(document).ready(function() {
  var links = Array.prototype.slice.call(document.querySelectorAll('.mdl-navigation__link'));

  links.forEach(function(link) {
    link.addEventListener('click', function() {
      document.getElementById("drawer").className = "mdl-layout__drawer";
      $('.mdl-layout__drawer, .mdl-layout__obfuscator').removeClass('is-visible');
    });
  });
});
