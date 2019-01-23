@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('pages.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มข่าวน่ารู้</a>
                    <!-- <a href="#" class="btn btn-danger" style="margin-left: 5px;"><i class="fa fa-trash"></i> Delete</a> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%" >No</th>
                                <th width="10%">title</th>
                                <th width="50%">Description</th>
                                <th width="5%" >status</th>
                                <th width="10%">Created</th>
                                <th width="25%">Action</th>
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
                                        published
                                    @elseif($data->status == 2)
                                        draft
                                    @endif
                                </span></td>
                                <td>{{ Wocglobal::DateThai($data->created_at) }}</td>
                                <td>
                                    <a href="{{ route('pages.edit', $data->slug) }}" class="btn btn-primary"><i class="fa fa-cog"></i> edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['pages.destroy', $data->pageId],'style'=>'display:inline']) !!}
                                        {{ Form::button('<i class="fa fa-trash"></i>  Delete', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                                    {!! Form::close() !!}
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