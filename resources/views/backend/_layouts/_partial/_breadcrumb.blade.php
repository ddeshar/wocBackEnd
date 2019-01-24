<div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> {{ $title }}</h1>
      <!-- <p>Start a beautiful journey here</p> -->
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <?php 
          $link = "";
          $newa  = count(Request::segments());
      ?>
      @for($i = 1; $i <= $newa; $i++)
          @if($i < $newa)
              <?php $link .= "/" . Request::segment($i); ?>
              <li class="breadcrumb-item"><a href="<?= $link ?>">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a></li>
          @else
              <li class="breadcrumb-item active">{{ucwords(str_replace('-',' ',Request::segment($i)))}}</li>
          @endif
      @endfor
    </ul>
</div>
