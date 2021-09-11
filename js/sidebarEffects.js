var SidebarMenuEffects = (function() {

 	function hasParentClass( e, classname ) {
		if(e === document) return false;
		if( classie.has( e, classname ) ) {
			return true;
		}
		return e.parentNode && hasParentClass( e.parentNode, classname );
	}

	
	function mobilecheck() {
		var check = false;
		(function (a) {
			if (/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310\-/i.test(a.substr(0, 4))) check = true
})(navigator.userAgent || navigator.vendor || window.opera);
		return check;
	}
	function init() {

		var container = document.getElementById( 'st-container' ),
			buttons = Array.prototype.slice.call( document.querySelectorAll( '#st-trigger-effects > button' ) ),
			eventtype = mobilecheck() ? 'touchstart' : 'click',
			resetMenu = function() {
				classie.remove( container, 'st-menu-open' );					   
			},
			bodyClickFn = function(evt) {
				if (!hasParentClass(evt.target, 'st-menu') || hasParentClass(evt.target, 'news1')) {
					resetMenu();
					document.removeEventListener( eventtype, bodyClickFn );
					setTimeout(function() { 
						var x = document.getElementById("st-trigger-effects");
						x.style.width = "70px"; 
						x.style.height = "200px";	
					}, 350);	
				}
			};
		buttons.forEach( function( el, i ) {
			var effect = el.getAttribute( 'data-effect' );

			el.addEventListener( eventtype, function( ev ) {
				ev.stopPropagation();
				ev.preventDefault();
				container.className = 'st-container'; 
				classie.add( container, effect );
				setTimeout( function() {
					classie.add( container, 'st-menu-open' );
					setTimeout(function() {
					var x = document.getElementById("st-trigger-effects");
					x.style.width = "0px"; 
					x.style.height = "0px";
					},250)
				}, 25 );
				document.addEventListener( eventtype, bodyClickFn );
			});
		} );

	}

	init();

})();