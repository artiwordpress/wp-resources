jQuery(document).ready(function($){
	$(document).on('click','#filterbtn', function(){
		//e.preventDefault();
		var resourcetype = $('#resourcetype').val();
		var resourcetopic = $('#resourcetopic').val();
		var keywords = $('#keywords').val();
	      $.ajax({
	        url: myajax.ajax_url,
	        type: 'post',
			dataType: 'html',
	        data: {action: 'resource_filter',resourcetype: resourcetype,resourcetopic: resourcetopic, keywords:  keywords },
			beforeSend: function() {
				$('.resource_list').html('Searching...');
			},
	        success: function(data) {
	          $('.resource_list').html(data);
	        }
	      });
	});
});