@extends('layouts.app')

@section('title', 'Data Orang Tua')

@section('contents')
    <!-- Default box -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{ route('orangtua.create') }}" class="btn btn-default btn-sm"><i class="fa fa-plus"></i></a>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Pegawai</th>
                        <th>Status</th>
                        <th>Nama Orang Tua</th>
                        <th>No. KTP/NIK</th>
                        <th>TTL</th>
                        <th>Pendidikan</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orangtua as $ot)
                        <tr>
                            <td style="width:20px">{{ $loop->iteration }}</td>

                            <td>{{ $ot->pegawai->nama }}</td>
                            <td>{{ $ot->nama }}</td>
                            <td>{{ $ot->nik }}</td>
                            <td>{{ $ot->tempat_lahir . ', ' . $ot->tanggal_lahir }}</td>
                            <td>{{ $ot->pendidikan }}</td>
                            <td>{{ $ot->pekerjaan }}</td>
                            <td>{{ $ot->status_hubungan }}</td>

                            <td style="width:165px" class="d-flex">


                                <a href="{{ route('pegawai.edit', $ot->id) }}" class="btn btn-success btn-sm">Edit</a>

                                <a href="{{ route('pegawai.destroy', $ot->id) }}" class="btn btn-danger btn-sm"
                                    data-confirm-delete="true">Hapus</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box -->

@endsection
