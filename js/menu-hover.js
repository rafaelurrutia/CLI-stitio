$(document).ready(function() {
	// $( ".dropdown.menu-drop" ).hover(
	// 	function() {
	// 		$( this ).addClass( "hover" );
	// 		alert("One");
	// 	}, function() {
	// 		alert("Two");
	// 		$( this ).removeClass( "hover" );
	// 	}
	// );
	var dropdownin = document.getElementsByClassName('ie-ten-hoverin');
	var dropdownout = document.getElementsByClassName('ie-ten-hoverout');
	for (var i = 0 ; i < dropdownin.length; i++) {
		dropdownin[i].addEventListener('mouseover', function(e) {
		if (e.target !== this) return; 
		this.classList.add('ie-showmenu');
		alert("Clase agregada");
	});
	dropdownout[i].addEventListener('mouseout', function(e) {
		this.parentNode.classList.remove('ie-showmenu');
		alert("Clase removida");
	});
	}

});