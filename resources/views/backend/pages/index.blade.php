@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('pages.create') }}" class="btn btn-success"><i class="fa fa-plus"></i>  {{ __('WocAdmin.addPage') }} </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%" > {{ __('WocAdmin.No') }} </th>
                                <th width="10%"> {{ __('WocAdmin.title') }} </th>
                                <th width="50%"> {{ __('WocAdmin.description') }} </th>
                                <th width="5%" > {{ __('WocAdmin.status') }} </th>
                                <th width="10%"> {{ __('WocAdmin.Created') }} </th>
                                <th width="25%"> {{ __('WocAdmin.Action') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach ($datas as $data)
                            <?php $i++ ?>
                            <tr>
                                <td><?=$i?></td>
                                <td>{{ $data->title }}</td>
                                <td>{!! $data->body !!}</td>

                                <td><span class="badge badge-primary">
                                    @if($data->status == 1)
                                         {{ __('WocAdmin.published') }} 
                                    @elseif($data->status == 2)
                                         {{ __('WocAdmin.draft') }} 
                                    @endif
                                </span></td>
                                <td>{{ Wocglobal::DateThai($data->created_at) }}</td>
                                <td>

                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="{{ route('pages.edit',$data->slug) }}"><i class="fa fa-lg fa-edit"></i></a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['pages.destroy', $data->pageId],'style'=>'display:inline']) !!}
                                            {!! Form::button('<i class="fa fa-lg fa-trash"></i>', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                        {!! Form::close() !!}
                                    </div>

                                </td>
                            </tr>
                            @endforeach   
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection

@section('footer_scripts')
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection