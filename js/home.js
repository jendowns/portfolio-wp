console.log("( ^ o ^ )/");

jQuery.noConflict();
(function($){
	// function debounce(func, wait, immediate) {
	var on_click_square_minimize = debounce(function click_square_minimize(){
	  var elem = $(this).parents(".project-wrapper");
	  $(elem).toggleClass("collapsed");
	  $(this).find(".icon-maximize, .icon-minimize").toggleClass("hidden");
	}, 150, true);

	$(".square.minimize").on("click", on_click_square_minimize);

	/*
	var on_click_square_next_prev = debounce(function click_square_next_prev(){
	  var elem = $(this).parents(".project-wrapper:not(.collapsed)");
	  var img_to_hide = $(elem).find("img:not(.faded-in)");
	  //$(img_to_hide).siblings("img").removeClass("hidden");
	  //$(img_to_hide).addClass("hidden");
	  $(img_to_hide).siblings("img").removeClass("faded-in"); // because there are 2 imgs
	  $(img_to_hide).addClass("faded-in");
	}, 150, true);
	
	$(".square.prev, .square.next").on("click", on_click_square_next_prev);
	// ---
	*/
})(jQuery);
