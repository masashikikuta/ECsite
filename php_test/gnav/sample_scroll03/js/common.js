jQuery( function() {
    jQuery( window ).scroll( function () {
        var $scrollTopRatio = Math.round( this.scrollTop / ( this.scrollHeight - this.clientHeight ) * 100 );
        var $scrollLeftRatio = Math.round( this.scrollLeft / ( this.scrollWidth - this.clientWidth ) * 100 );
        jQuery( '#scrollTopOutput' ).html( $scrollTopRatio + '%' );
        jQuery( '#scrollLeftOutput' ).html( $scrollLeftRatio + '%' );

		var scrollPercent = $(window).scrollTop() / ($(document).height() - $(window).height()) * 100;
		console.log(scrollPercent + "%");
    } );
} );