jQuery(document).ready(function(a){console.log("%c¡Me Encontraste!","font-size: 32px; background-color: #d54935; padding: 3px 10px 5px; color: #efefef","(You found me!)"),console.log("%cIf you enjoyed checking out my amateur coding skills, why not hire me and help me to improve? I'd love to learn from a pro!","color: #323232; font-size: 14px; background-color: #efefef; padding: 5px 10px 8px;");var i=a("#menu"),s=a("header");i.on("click",function(){var o=a("#mainNav"),e=a("body"),s=a("#mainNav .nav-item, #mainNav .contact");o.toggleClass("is-open"),s.toggleClass("is-open"),i.toggleClass("is-open"),o.hasClass("is-open")?e.css({overflow:"hidden"}):e.css({overflow:"auto"})}),a(window).scroll(function(){var o=a(window).scrollTop(),e=a("header.is_about_detail");s.hasClass("is_about_detail")&&100<=o?e.addClass("is_scrolled"):0==o&&e.removeClass("is_scrolled")});var o=a(".work-img, .post-img, .aspot-carousel--img"),e=a("#more-repos");o.hover(function(){a(this).toggleClass("hover")}),e.click(function(o){o.preventDefault();a.getJSON("https://api.github.com/users/WeebleWobb/repos?visibility=public&affiliation=owner&sort=pushed",{type:"owner",sort:"created"},function(o){var e=a("#repoContainer");repoHTML="",a.each(o,function(o,e){repoHTML+='<div class="col-4 repo-flex">',repoHTML+='<article class="repos-post">',repoHTML+='<a href="'+e.html_url+'" target="_blank"><h6>'+e.name+"</h6></a>",repoHTML+="<p>"+e.description+"</p>",repoHTML+='<div class="repos-post-meta">'+e.language+"</div>",repoHTML+="</article>",repoHTML+="</div>"}),e.html(repoHTML)}),a(this).hide()}),window.onload=function(){var e=a("#js-disclaimer"),o=a(".js-agree");e.length&&e.addClass("disclaimer-show"),o.click(function(o){o.preventDefault(),e.removeClass("disclaimer-show")})}});