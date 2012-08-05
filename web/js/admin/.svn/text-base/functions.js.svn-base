/*  TEMPLATE CORE JS file uud  */
$(document).ready(function() {
	/* Core JS Functions */
	
	/* Collapsible Panels. Talbariin header iig collapsable bolgono */
	$(".mbm-panel.mbm-collapsible .mbm-panel-header")
		.append("<div class=\"mbm-collapse-button mbm-inset\"><span></span></div>")
			.find(".mbm-collapse-button span")
				.live("click", function(event) {
					$(this).toggleClass("mbm-collapsed")
						.parents(".mbm-panel")
							.find(".mbm-panel-body")
								.slideToggle("fast");
				});

	
	
	
	/* Side Menu Notification Class */
	$(".mbm-nav-tooltip").addClass("mbm-inset");
	
	/* Table Row CSS Class */
	$("table.mbm-table tbody tr:even").addClass("even");
	$("table.mbm-table tbody tr:odd").addClass("odd");
	
	/* File Input Styling */
	
	if($.fn.filestyle) {
		$("input[type='file']").filestyle({
			imagewidth: 78, 
			imageHeight: 28
		});
		$("input.file").attr("readonly", true);
	}
	
	/* Tooltips */
	
	if($.fn.tipsy) {
		var gravity = ['n', 'ne', 'e', 'se', 's', 'sw', 'w', 'nw'];
		for(var i in gravity)
			$(".mbm-tooltip-"+gravity[i]).tipsy({gravity: gravity[i]});
			
		$('input[title], select[title], textarea[title]').tipsy({trigger: 'focus', gravity: 'w'});
	}
	
	/* Dual List Box */
	
	if($.configureBoxes) {
		$.configureBoxes();
	}
	
	if($.fn.placeholder) {
		$('[placeholder]').placeholder();
	}
});
