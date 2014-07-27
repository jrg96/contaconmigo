$(document).ready(function() {
	$("#select_dept").change(function() {
		$.ajax({
			url: "php_helpers/get_org_info.php?id=" + $("#select_dept").val(),
		}).done(function(data) {
			deleteOrgs();
			
			var orgs = data;
			orgs = data.split('|');
			
			var i = 0;
			
			while (i < orgs.length){
				addOrg(orgs[i + 1], orgs[i + 2], parseInt(orgs[i + 3]), orgs[i + 4]);
				mark_id[orgs[i + 4]] = orgs[i + 5];
				i +=6;
			}
		});
	});
	
	$("#close").click(function(){
		$("#info-content").css({display: "none", });
	});
});