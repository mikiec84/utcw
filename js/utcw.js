(function ( $ ) {

	var UTCW = {

		activeTab:[],
		tooltipStyle:{
			border:"solid 1px #6295fb",
			background:"#fff",
			color:"#000",
			padding:"5px",
			zIndex:1E3
		},

		init:function () {
			$( 'input[id$=-color_none], input[id$=-color_random], input[id$=-color_set], input[id$=-color_span]' ).live( 'click', this.colorClickHandler );
			$( '.utcw-tab-button' ).live( 'click', this.tabClickHandler );

			$(document).ready( this.initTooltip );
		},

		initTooltip: function() {
			$(".utcw-help").wTooltip({
				style: this.tooltipStyle,
				className:'utcw-tooltip'
			});
		},

		tabClickHandler:function () {
			var $this = $( this );

			if ( $this.data( 'id' ) === "utcw-__i__" ) {
				return false;
			}

			$this.parent().find( ".utcw-tab-button" ).removeClass( "utcw-active" );
			$this.addClass( "utcw-active" );

			$this.parent().find( "fieldset.utcw" ).addClass( "hidden" );
			$( "#" + $this.data( 'tab' ) ).removeClass( "hidden" );

			UTCW.activeTab[ $this.data( 'id' ) ] = $this.data( 'tab' );

			return false;
		},

		colorClickHandler:function () {

			var $set_chooser = $( "div[id$='set_chooser']" );
			var $span_chooser = $( "div[id$='span_chooser']" );
			var value = $( this ).val();

			$set_chooser.addClass( 'utcw-hidden' );
			$span_chooser.addClass( 'utcw-hidden' );

			if ( value === 'set' ) {
				$set_chooser.removeClass( 'utcw-hidden' );
			} else if ( value === 'span' ) {
				$span_chooser.removeClass( 'utcw-hidden' );
			}
		}
	};

	UTCW.init();

}( jQuery ));