$(window).on("scroll",function(){$(window).scrollTop()>=600?$(".hilang-head").addClass("hilang-sticky"):$(".hilang-head").removeClass("hilang-sticky")});

$(document).ready(function(){
  var menu = $("#menu-button"),
      mainMenu = $("#menuWrapper"),
      close = $("#close");
      
    menu.on('click', function(){
      mainMenu.addClass('show-box');
    });

    close.on('click', function() {
      mainMenu.removeClass('show-box');
    });
});

var linkCollapse = document.getElementsByClassName('child-toggle');
var i;

for(i=0;i<linkCollapse.length;i++){
  linkCollapse[i].addEventListener('click', function(){
    var collapseMenu = this.nextElementSibling
    collapseMenu.classList.toggle('show-child-menus')

  })
}

$(document).on('click', '.menu-prosing', function() {
    $(this).addClass('active').siblings().removeClass('active')
})