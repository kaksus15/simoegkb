@extends('layouts.app')

@section('title', 'Data Golongan')

@section('contents')
    <!-- Default box -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{ route('anak.create') }}" class="btn btn-default btn-sm"><i class="fa fa-plus"></i></a>
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
                        <th>Nama Anak</th>
                        <th>Nomor KTP</th>
                        <th>Pendidikan</th>
                        <th>Pekerjaan</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($golongan as $gol)
                        <tr>
                            <td style="width:20px">{{ $loop->iteration }}</td>
                            <td>{{ $gol->pangkat }}</td>
                            <td>{{ $gol->golongan }}</td>
                            <td style="width:100px" class="d-flex">

                                <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger"
                                    data-confirm-delete="true">Delete</a>

                                <a href="{{ route('golongan.edit', $gol->id) }}" class="btn btn-success btn-sm">Edit</a>
                                <a href="{{ route('golongan.destroy', $gol->id) }}" class="btn btn-danger btn-sm"
                                    data-confirm-delete="true">Hapus</a>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box -->

@endsection
