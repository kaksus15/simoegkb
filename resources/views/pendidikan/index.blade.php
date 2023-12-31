@extends('layouts.app')

@section('title', 'Data Pendidikan')

@section('contents')
    <!-- Default box -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{ route('pendidikan.create') }}" class="btn btn-default btn-sm"><i class="fa fa-plus"></i></a>
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
                        <th>Pendidikan</th>
                        <th>Sekolah/Perguruan Tinggi</th>
                        <th>Lokasi</th>
                        <th>Nomor Ijazah</th>
                        <th>Tanggal Ijazah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($pegawai as $peg)
                        <tr>
                            <td style="width:20px">{{ $loop->iteration }}</td>
                            <td>

                                @if ($peg->image)
                                    <img src="{{ asset('storage/' . $peg->image) }}" height="80" width="80" />
                                @else
                                    <img src="{{ asset('assets/img/profil-pegawai.png') }}" height="80" width="80" />
                                @endif

                            </td>
                            <td>{{ $peg->nip }}</td>
                            <td>{{ $peg->nama }}</td>
                            <td>{{ $peg->jenis_kelamin }}</td>
                            <td>{{ $peg->tempat_lahir . ', ' . $peg->tanggal_lahir }}</td>
                            <td>{{ $peg->golongan->pangkat . ' - ' . $peg->golongan->golongan }}</td>
                            <td style="width:165px" class="d-flex">
                                <a href="{{ route('pegawai.edit', $peg->id) }}" class="btn btn-default btn-sm">Detail</a>

                                <a href="{{ route('pegawai.edit', $peg->id) }}" class="btn btn-success btn-sm">Edit</a>

                                <a href="{{ route('pegawai.destroy', $peg->id) }}" class="btn btn-danger btn-sm"
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
