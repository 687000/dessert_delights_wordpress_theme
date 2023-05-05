$(document).ready(function () {
	$('nav li').hover(function () {
		$(this).addClass('nav-item-hover');
	}, function () {
		$(this).removeClass('nav-item-hover');
	});

	$('nav li').click(function () {
		$('nav li').removeClass('nav-item-hover');
		$('nav li').removeClass('active');
		$(this).addClass('active');
	});

	$('nav li.active').addClass('nav-item-hover');
    // Close navbar collapse when clicking outside
    $(document).click(function (event) {
        var clickover = $(event.target);
        var $navbar = $(".navbar-collapse");               
        var _opened = $navbar.hasClass("show");
        if (_opened === true && !clickover.hasClass("navbar-toggle")) {      
            $navbar.collapse('hide');
        }
    });
});