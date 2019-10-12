	<script>
		var menus = {
			"oneThemeLocationNoMenus" : "",
			"moveUp" : "Move up",
			"moveDown" : "Mover down",
			"moveToTop" : "Move top",
			"moveUnder" : "Move under of %s",
			"moveOutFrom" : "Out from under  %s",
			"under" : "Under %s",
			"outFrom" : "Out from %s",
			"menuFocus" : "%1$s. Element menu %2$d of %3$d.",
			"subMenuFocus" : "%1$s. Menu of subelement %2$d of %3$s."
		};
		var arraydata = [];
		// {{ url('admin/haddcustommenu') }}
		// var addcustommenur= '{{ url("admin/menu/addcustommenu") }}';
		var addcustommenur= '{{ route("haddcustommenu") }}';
		var updateitemr= '{{ route("hupdateitem")}}';
		var generatemenucontrolr= '{{ route("hgeneratemenucontrol") }}';
		var deleteitemmenur= '{{ route("hdeleteitemmenu") }}';
		var deletemenugr= '{{ route("hdeletemenug") }}';
		var createnewmenur= '{{ route("hcreatenewmenu") }}';
		var csrftoken="{{ csrf_token() }}";
		var menuwr = "{{ url()->current() }}";

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': csrftoken
			}
		});
	</script>

	<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/scripts2.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/menu.js')}}"></script>

    <script type="text/javascript">
      $(function() {
            $("select[name=linktype]").on('change', function(event) {
                var link_type = $(this).val();
                if (link_type == 2) {
                    $("#external").hide();
                    $("#internal").show();
                    $("#page").hide();                
                }else if(link_type == 3){
                    $("#page").show();  
                    $("#internal").hide();
                    $("#external").hide();
                }else {
                    $("#external").show();
                    $("#internal").hide();
                    $("#page").hide();
                }
            });
            
            $("select[name=linktype]").trigger('change');
      });

      $(function() {
        $("select[name=linktype-edit]").on('change', function(event) {
            var link_edit = $(this).val();
            if (link_edit == 2) {
                $("#external-edit").hide();
                $("#internal-edit").show();
                $("#page-edit").hide();                
            }else if(link_edit == 3){
                $("#page-edit").show();  
                $("#internal-edit").hide();
                $("#external-edit").hide();
            }else {
                $("#external-edit").show();
                $("#internal-edit").hide();
                $("#page-edit").hide();
            }
        });
        
        $("select[name=linktype-edit]").trigger('change');
            
      });

    </script>