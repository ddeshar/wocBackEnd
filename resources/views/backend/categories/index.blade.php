@extends('backend._layouts.master')

@section('title', '')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-title-w-btn">
                    <h3 class="title"> {{ __('WocAdmin.categories') }} </h3>
                    <p><a class="btn btn-primary icon-btn" href="{{ route('categories.create') }}"><i class="fa fa-plus"></i> {{ __('WocAdmin.addCat') }} </a></p>
                </div>

                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th> {{ __('WocAdmin.No') }} </th>
                                <th> {{ __('WocAdmin.order') }} </th>
                                <th> {{ __('WocAdmin.Name') }} </th>
                                <th> {{ __('WocAdmin.slug') }} </th>
                                <th> {{ __('WocAdmin.Action') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach ($categories as $categorie)
                                <tr>
                                    <?php $i++ ?>
                                    <td>{{ $i }}</td>
                                    <td>{{ $categorie->order }}</td>
                                    <td>{{ $categorie->name }}</td>
                                    <td>{{ $categorie->slug }}</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <a class="btn btn-primary" href="{{ route('categories.show', $categorie->id) }}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-warning" href="{{ route('categories.edit', $categorie->id) }}"><i class="fa fa-edit"></i></a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $categorie->id],'style'=>'display:inline']) !!}
                                                {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection