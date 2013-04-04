define(function(require, exports, module) {


	var stereo = {

		hi: function(hi){
			alert(hi);
		},

		json_req: function(url, data, callback){
			$.ajax({
			  type: "POST",
			  url: url,
			  data: data,
			  dataType: "json"
			}).done(callback);			
		}
	
	};

	return stereo;

});