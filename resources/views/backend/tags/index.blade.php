@extends('backend._layouts.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h3 class="title">tags</h3> -->
                    <p><a class="btn btn-primary icon-btn" href="{{ route('tags.create') }}"><i class="fa fa-plus"></i>Add tags</a></p>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>tag</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach ($datas as $tag)
                                <tr>
                                    <?php $i++ ?>
                                    <td>{{ $i }}</td>
                                    <td>{{ $tag->tag }}</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <a class="btn btn-primary" href="{{ route('tags.show', $tag->id) }}"><i class="fa fa-lg fa-eye"></i></a>
                                            <a class="btn btn-info" href="{{ route('tags.edit', $tag->id) }}"><i class="fa fa-lg fa-edit"></i></a>
                                            <!-- <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a> -->
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
