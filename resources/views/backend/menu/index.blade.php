@extends('backend._layouts.master')

@section('content')

    @include('backend._layouts._partial.messages._messages')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('menu.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add Menu Item</a>
                </div>

                <div class="card-header p-2">
                    <ul class="nav nav-tabs" role="tablist">
                        <?php $header = 0 ?>
                        @foreach($menus as $group => $group_menu)
                            <?php $header++; ?>
                            <li class="nav-item">
                                <a class="nav-link @if($header == 1) active @endif" href="#{{ $group }}" role="tab" data-toggle="tab" >{{ $group }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="card-body">
                    <div class="tab-content">

                        <?php $i = 0 ?>
                        @foreach($menus as $group => $group_menu)
                            <?php $i++; ?>
                            <div role="tabpanel" class="tab-pane fade @if($i == 1) show active @endif" id="{{ $group }}">
                                <table id="example{{$i}}" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ลำดับที่</th>
                                            <th>ชื่อเมนู</th>
                                            <th>ลิ้งเชื่อมต่อ</th>
                                            <th>ประเภทเมนู</th>
                                            <th>เปิดใช้งาน</th>
                                            <th>การใช้งานปุ่ม</th>
                                        </tr>
                                    </thead>
                                    <tbody>    

                                        <?php $c = 0 ?>
                                        @foreach($group_menu as $item)
                                        <?php $c++ ?>
                                            <tr>
                                                <td>{{ $c }}</td>

                                                <td>{{$item->title}}</td>
                                                <td>{{ $item->path }}</td>
                                                <td>{{ $item->linktype }}</td>

                                                <td>{{ (bool) $item->active ? 'ใช่' : 'ไม่ใช่' }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-info" href="{{ route('menu.edit', ['id' => $item->id]) }}"> แก้ไข </a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['menu.destroy', $item->id],'style'=>'display:inline' ]) !!}
                                                        {{ Form::button('ลบข้อมูล', ['type' => 'submit', 'class' => 'btn btn-sm btn-danger'] )  }}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach

                    </div>
                </div>

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
    <!-- <script type="text/javascript">$('#sampleTable').DataTable();</script> -->

    <!-- page script -->
    <script>
        var  datatablemenu =  {
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            // "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
            // "iDisplayLength": 25,
            "language": {
                "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
                "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix":    "",
                "sInfoThousands":  ",",
                "sLengthMenu":     "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing":     "กำลังดำเนินการ...",
                "sSearch":         "ค้นหา: ",
                "sZeroRecords":    "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst":    "หน้าแรก",
                "sPrevious": "ก่อนหน้า",
                    "sNext":     "ถัดไป",
                "sLast":     "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            }
        }

        <?php $x = 0 ?>
        @foreach($menus as $group => $group_menu)
        <?php $x++; ?>
            $(function () {
                $("#example{{$x}}").DataTable(datatablemenu);
            });
        @endforeach
    </script>
@endsection