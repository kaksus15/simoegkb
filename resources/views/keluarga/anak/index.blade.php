@extends('layouts.app')

@section('title', 'Data Anak')

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
                        <th>Nama Pasangan</th>
                        <th>No. KTP/NIK</th>
                        <th>TTL</th>
                        <th>Pendidikan</th>
                        <th>Pekerjaan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($pasangan as $pas)
                        <tr>
                            <td style="width:20px">{{ $loop->iteration }}</td>

                            <td>{{ $pas->pegawai->nama }}</td>
                            <td>{{ $pas->nama }}</td>
                            <td>{{ $pas->nik }}</td>
                            <td>{{ $pas->tempat_lahir . ', ' . $pas->tanggal_lahir }}</td>
                            <td>{{ $pas->pendidikan }}</td>
                            <td>{{ $pas->pekerjaan }}</td>
                            <td>{{ $pas->status_hubungan }}</td>

                            <td style="width:165px" class="d-flex">


                                <a href="{{ route('pegawai.edit', $pas->id) }}" class="btn btn-success btn-sm">Edit</a>

                                <a href="{{ route('pegawai.destroy', $pas->id) }}" class="btn btn-danger btn-sm"
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
