@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if ($message = Session::get($msg))
    <div id="alert" class="card alert-{{$msg}}" >
        <div class="card-header">
          <p>{{ $message }}</p>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
      window.setTimeout(function () {
          $("#alert").fadeTo(500, 0).slideUp(500, function () {
              $(this).remove();
          });
      }, 5000);
    </script>
  @endif
@endforeach