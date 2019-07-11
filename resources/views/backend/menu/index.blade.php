@extends('backend._layouts.master')

@php
    $title = __('WocBread.menus');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
            <h2>{{ __('WocAdmin.addMenu') }}</h2>
            {!! Menu::render() !!}
        </div>
      </div>
    </div>
  </div>

@endsection


@push('scripts')
    {!! Menu::scripts() !!}

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

      // function updateitem(id = 0) {
      // if(id){
      //   var label = $("#idlabelmenu_" + id).val()
      //   alert
      // }else{
      //     var label = $(this).find(".edit-menu-item-title").val();
      // }



      $(function() {
        // var id = 0;
        // var label = $("#linktype_" + id).val();
        // alert(label);
        // var patt1 = /[0-9]/g;
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
@endpush