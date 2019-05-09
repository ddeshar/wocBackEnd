@extends('backend._layouts.master')
@php
    $title = __('WocBread.Generator');
@endphp

@section('title', $title .' | '. __('WocBread.WocAdmin') )
@section('content')

<form class="form-horizontal" method="post" action="{{ url('/admin/generator') }}">
{{ csrf_field() }}

    <div class="row">
        @include('backend._layouts._partial.messages._alert')
        <div class="col-md-6">
            <div class="card card-danger card-outline">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#Generator" data-toggle="tab"> {{ __('WocAdmin.Generator') }} </a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">

                        <div class="active tab-pane" id="Generator">

                            <div class="form-group">
                                <label for="crud_name">Crud Name:</label>
                                <input type="text" name="crud_name" class="form-control" id="crud_name" placeholder="Posts" required="true">
                            </div>

                            <div class="form-group">
                                <label for="controller_namespace">Controller Namespace:</label>
                                <input type="text" name="controller_namespace" class="form-control" id="controller_namespace" placeholder="Backend">
                            </div>

                            <div class="form-group">
                                <label for="route_group">Route Group Prefix:</label>
                                <input type="text" name="route_group" class="form-control" id="route_group" placeholder="admin">
                            </div>

                            <div class="form-group">
                                <label for="view_path">View Path:</label>
                                <input type="text" name="view_path" class="form-control" id="view_path" placeholder="backend">
                            </div>

                            <div class="form-group">
                                <label for="route">Want to add route?</label>
                                <select name="route" class="form-control" id="route">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="relationships">Relationships</label>
                                <input type="text" name="relationships" class="form-control" id="relationships" placeholder="comments#hasMany#App\Comment">
                                <p class="help-block">method#relationType#Model</p>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="form_helper">Form Helper</label>
                                    <select name="form_helper" class="form-control" id="form_helper">
                                        <option value="html">html</option>
                                        <option value="laravelcollective">laravelcollective</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="soft_deletes">Want to use soft deletes?</label>
                                    <select name="soft_deletes" class="form-control" id="soft_deletes">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">

            <div class="card card-danger card-outline">

                <div class="card-header p-2">
                    <p class="backHeader"> Table Fields </p>
                </div>
                    <div class="card-body">

                        <div class="form-group table-fields row entry">
                            <div class="entry col-md-12 form-inline">
                                <input class="form-control col-md-5" name="fields[]" type="text" placeholder="field_name" required="true">
                                <select name="fields_type[]" class="form-control col-md-2 offset-md-1">
                                    <option value="string">string</option>
                                    <option value="char">char</option>
                                    <option value="varchar">varchar</option>
                                    <option value="password">password</option>
                                    <option value="email">email</option>
                                    <option value="date">date</option>
                                    <option value="datetime">datetime</option>
                                    <option value="time">time</option>
                                    <option value="timestamp">timestamp</option>
                                    <option value="text">text</option>
                                    <option value="mediumtext">mediumtext</option>
                                    <option value="longtext">longtext</option>
                                    <option value="json">json</option>
                                    <option value="jsonb">jsonb</option>
                                    <option value="binary">binary</option>
                                    <option value="number">number</option>
                                    <option value="integer">integer</option>
                                    <option value="bigint">bigint</option>
                                    <option value="mediumint">mediumint</option>
                                    <option value="tinyint">tinyint</option>
                                    <option value="smallint">smallint</option>
                                    <option value="boolean">boolean</option>
                                    <option value="decimal">decimal</option>
                                    <option value="double">double</option>
                                    <option value="float">float</option>
                                </select>

                                <label class="control-label">Required</label>
                                <select name="fields_required[]" class="form-control col-md-2">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>

                                <button class="btn btn-success btn-add inline btn-sm" type="button">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="bs-component">
                            <div class="alert alert-dismissible alert-success">
                                <button class="close" type="button" data-dismiss="alert">×</button><strong>Hey!</strong> It will automatically assume form fields based on the migration field type.</a>.
                            </div>
                        </div>

                    </div>
            
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="generate">Generate</button>
                    </div>

            </div>

        </div>

    </div>

</form>

@endsection

@section('footer_scripts')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();

                var tableFields = $('.table-fields'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(tableFields);

                newEntry.find('input').val('');
                tableFields.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<i class="fa fa-minus"></i>');
            }).on('click', '.btn-remove', function(e) {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });

        });
    </script>
@endsection
