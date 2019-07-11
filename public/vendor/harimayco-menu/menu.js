var arraydata = [];
function getmenus() {
	arraydata = [];
	$("#spinsavemenu").show()

	var cont = 0;
	$("#menu-to-edit li").each(function(index) {
		var dept = 0;
		for (var i = 0; i < $("#menu-to-edit li").length; i++) {

			var n = $(this).attr("class").indexOf("menu-item-depth-" + i);
			if (n != -1) {
				dept = i;
			}
		};
		var textoiner = $(this).find(".item-edit").text();
		var id = this.id.split("-");
		var textoexplotado = textoiner.split("|"); 
		var padre = 0;  
		if (!!textoexplotado[textoexplotado.length-2] && textoexplotado[textoexplotado.length-2]!= id[2]) {  
			padre = textoexplotado[textoexplotado.length-2]
		}
		arraydata.push({
			depth : dept,
			id : id[2],
			parent : padre,
			sort : cont
		})
		cont++;
	});
	updateitem();
	actualizarmenu();
}

function addcustommenu() {
	$("#spincustomu").show();

	$.ajax({
		data : {
			label		: $("#custom-menu-item-label").val(),
			linktype	: $("#custom-menu-item-linktype").val(),
			external	: $("#custom-menu-item-external").val(),
			internal	: $("#custom-menu-item-internal").val(),
			page		: $("#custom-menu-item-page").val(),
			class		: $("#custom-menu-item-class").val(),
			icon		: $("#custom-menu-item-icon").val(),
			rolemenu 	: $("#custom-menu-item-role").val(),
			idmenu 		: $("#idmenu").val()
		},

		url : addcustommenur,
		type : 'POST',
		success : function(response) {
			
			window.location = "";

		},
		complete: function(){
			$("#spincustomu").hide();
		}

	});
}

function updateitem(id = 0) {
	
	if(id){

		var labeledit = $("#idlabelmenu_" + id).val();
		var linktype = $("#linktype_" + id).val();
		var external = $("#external_" + id).val();
		var internal = $("#internal_" + id).val();
		var page = $("#page_" + id).val();
		var classedit = $("#class_menu_" + id).val();
		var icon = $("#icon_" + id).val();
		var active = $("#active_" + id).val();

		// var label = $("#idlabelmenu_" + id).val()
		// var clases = $("#clases_menu_" + id).val()
		// var url = $("#url_menu_" + id).val()
		
		var role_id = 0
		if($("#role_menu_" + id).length  ) {
			 role_id = $("#role_menu_" + id).val()
		}

		var data = {
			labeledit : labeledit,
			linktype : linktype,
			external : external,
			internal : internal,
			page : page,
			classedit : classedit,
			icon : icon,
			active : active,
			role_id : role_id,
			id : id
		}
	}else{
		var arr_data = [];
		$('.menu-item-settings').each(function(k, v){
			var id = $(this).find(".edit-menu-item-id").val();
			var labeledit = $(this).find(".edit-menu-item-label").val();
			var linktype = $(this).find(".edit-menu-item-linktype").val();
			var external = $(this).find(".edit-menu-item-external").val();
			var internal = $(this).find(".edit-menu-item-internal").val();
			var page = $(this).find(".edit-menu-item-page").val();
			var classedit = $(this).find(".edit-menu-item-classedit").val();
			var icon = $(this).find(".edit-menu-item-icon").val();
			var active = $(this).find(".edit-menu-item-active").val();
			// var label = $(this).find(".edit-menu-item-title").val();
			// var clases = $(this).find(".edit-menu-item-classes").val();
			// var url = $(this).find(".edit-menu-item-url").val();
			var role = $(this).find(".edit-menu-item-role").val();
			arr_data.push({
				id : id,
				labeledit: labeledit,
				linktype: linktype,
				external: external,
				internal: internal,
				page: page,
				classedit: classedit,
				icon: icon,
				active: active,
				role_id : role
			});
		});

		var data = {arraydata: arr_data};
	}
	$.ajax({
		data : data,
		url :updateitemr,
		type : 'POST',
		beforeSend: function(xhr){
			if(id){
				$("#spincustomu2").show();
			}
		},
		success : function(response) {
						},
		complete: function(){
			if(id){
				$("#spincustomu2").hide();
			}
		}
					});
}

function actualizarmenu() {

	$.ajax({
		dataType : "json",
		data : {
			arraydata : arraydata,
			menuname : $("#menu-name").val(),
			idmenu : $("#idmenu").val()
		},

		url : generatemenucontrolr,
		type : 'POST',
		beforeSend: function(xhr) {
			$("#spincustomu2").show();
		},
		success : function(response) {

			console.log("aqu llega")
			
		},
		complete: function(){
			$("#spincustomu2").hide();
		}
	});
}

function deleteitem(id) {
	$.ajax({
		dataType : "json",
		data : {

			id : id
		},

		url :deleteitemmenur,
		type : 'POST',
		success : function(response) {

		}
	});
}

function deletemenu() {

	var r = confirm("Do you want to delete this menu ?");
	if (r == true) {
		$.ajax({
			dataType : "json",

			data : {

				id : $("#idmenu").val()
			},

			url : deletemenugr,
			type : 'POST',
			beforeSend: function(xhr){
				$("#spincustomu2").show();
			},
			success : function(response) {

				if (!response.error) {
					alert(response.resp);
					window.location = menuwr
				}else{
					alert(response.resp)
				}

			},
			complete: function(){
				$("#spincustomu2").hide();
			}
		});

	} else {
		return false;
	}

}

function createnewmenu() {

	if (!!$("#menu-name").val()) {
		$.ajax({
			dataType : "json",

			data : {
				menuname : $("#menu-name").val(),
			},

			url :createnewmenur,
			type : 'POST',
			success : function(response) {

				window.location = menuwr+"?menu=" + response.resp

			}
		});
	} else {
		alert("Enter menu name!")
		$("#menu-name").focus();
		return false;
	}

}

function insertParam(key, value){
    key = encodeURI(key); value = encodeURI(value);

    var kvp = document.location.search.substr(1).split('&');

    var i=kvp.length; var x; while(i--) 
    {
        x = kvp[i].split('=');

        if (x[0]==key)
        {
            x[1] = value;
            kvp[i] = x.join('=');
            break;
        }
    }

    if(i<0) {kvp[kvp.length] = [key,value].join('=');}

    //this will reload the page, it's likely better to store this until finished
    document.location.search = kvp.join('&'); 
}