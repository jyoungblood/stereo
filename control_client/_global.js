require.config({paths: { jquery: 'stereo/jquery-1.8.1.min' }});

require(["jquery"], function($, jch) {

	var controller = $("#js_init").data('controller');

	if (controller){
		require([ controller ], function(c) {
			c.init();
		});	
	}

});