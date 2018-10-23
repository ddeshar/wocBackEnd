<script type="text/javascript">
	$(function() {

        $("select[name=link_type]").on('change', function(event) {
            var link_type = $(this).val();
            if (link_type == 'internal') {
                $("#external").hide();
                $("#internal").show();
                $("#page").hide();                
            }else if(link_type == 'page'){
                $("#page").show();  
                $("#internal").hide();
                $("#external").hide();
            }else {
                $("#external").show();
                $("#internal").hide();
                $("#page").hide();
            }
        });
        
        $("select[name=link_type]").trigger('change');
        
	});
</script>