/*!
______ _____ _____  _   _____________ _________________
| ___ \  _  /  __ \| | / /_   _| ___ \  ___|  ___|  ___|
| |_/ / | | | /  \/| |/ /  | | | |_/ / |__ | |_  | |_
|    /| | | | |    |    \  | | |    /|  __||  _| |  _|
| |\ \\ \_/ / \__/\| |\  \ | | | |\ \| |___| |   | |
\_| \_|\___/ \____/\_| \_/ \_/ \_| \_\____/\_|   \_|

*/
/*jshint asi: true, es5: true, eqeqeq: true, plusplus: true, sub: true*/
/*global window, document, console, setTimeout */
;(function ( $, undefined ) {
	// Yay-ho!
	'use strict';
	$( document ).ready( function () {
		// add 3 random header images to the page
		for ( var i = 0; i < 4; i += 1)
			$( '#stage' )
				.append( '<img src="/wp-content/themes/rocktreff/images/header/rocktreff_header_' + (Math.random()*0x2b<<0) + '.jpg">' )
				.cycle({
					'fx': 'fade',
					'speed': 1000,
					'timeout': 5000,
					'pause': 1
				})
		// add Hyphenation
		Hyphenator.run({
			classname: 'hyphenate *'
		})

	})
})( jQuery )
