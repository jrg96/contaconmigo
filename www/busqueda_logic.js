$(document).ready(function() {
	$("#select_dept").change(function() {
		$.ajax({
			url: "php_helpers/get_org_info.php?id=" + $("#select_dept").val(),
		}).done(function(data) {
			alert(data);
		});
	});
});