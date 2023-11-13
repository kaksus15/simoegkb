@extends('layouts.app')

@section('title', 'Data Pasangan')

@section('contents')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">

                <div class="box-header with-border">
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                {{--
                <form class="form-horizontal" action="{{ route('pegawai.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">NIP</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="NIP" name="nip">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">NIK</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="NIK" name="nik">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">Nama Pegawai</label>
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="" placeholder="Gelar Depan"
                                    name="gelar_depan">
                            </div>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" id="" placeholder="Nama" name="nama">
                            </div>
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="" placeholder="Gelar Belakang"
                                    name="gelar_belakang">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">Tempat/Tgl. Lahir</label>
                            <div class="col-xs-2">
                                <input type="text" class="form-control" id="" name="tempat_lahir"
                                    placeholder="Tempat Lahir">
                            </div>
                            <div class="col-xs-4">
                                <input type="date" name="tanggal_lahir" class="form-control" id=""
                                    placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">Jenis Kelamin</label>
                            <div class="col-xs-6">
                                <select class="form-control select2" name="jenis_kelamin">
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">Agama</label>
                            <div class="col-xs-6">
                                <select class="form-control select2" name="agama">
                                    <option selected disabled>Pilih Agama</option>
                                    <option value="islam">Islam</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="protestan">Protestan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">Golongan Darah</label>
                            <div class="col-xs-6">
                                <select class="form-control select2" name="golongan_darah">
                                    <option selected disabled>Pilih Golongan Darah</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="0">O</option>
                                    <option value="Tidak Tahu">Tidak Tahu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">Status Pernikahan</label>
                            <div class="col-xs-6">
                                <select class="form-control select2" name="status_pernikahan">
                                    <option selected disabled>Pilih Status Pernikahan</option>
                                    <option value="Nikah">Nikah</option>
                                    <option value="Belum Nikah">Belum Nikah</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Karpeg</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="Kartu Pegawai"
                                    name="karpeg">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Telepon</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="No. Telepon"
                                    name="telepon">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">E-Mail</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="E-Mail"
                                    name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="Alamat"
                                    name="alamat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">NPWP</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="NPWP"
                                    name="npwp">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">BPJS</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="BPJS"
                                    name="bpjs">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">Status Pegawai</label>
                            <div class="col-xs-6">
                                <select class="form-control select2" name="status_pegawai">
                                    <option selected disabled>Pilih Status Pegawai</option>
                                    <option value="PNS">PNS</option>
                                    <option value="HONORER">HONORER</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">SK CPNS</label>
                            <div class="col-xs-2">
                                <input type="text" name="sk_cpns" class="form-control" id=""
                                    placeholder="No. SK CPNS">
                            </div>
                            <div class="col-xs-4">
                                <input type="date" name="tanggal_cpns" class="form-control" id=""
                                    placeholder="Tanggal SK CPNS">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">SK PNS</label>
                            <div class="col-xs-2">
                                <input type="text" name="sk_pns" class="form-control" id=""
                                    placeholder="No. SK PNS">
                            </div>
                            <div class="col-xs-4">
                                <input type="date" name="tanggal_pns" class="form-control" id=""
                                    placeholder="Tanggal SK PNS">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">Golongan Awal</label>
                            <div class="col-xs-6">
                                <select name="golongan_id" class="form-control select2">
                                    <option selected disabled>Pilih Golongan Awal</option>
                                    @foreach ($golongan as $gol)
                                        <option value="{{ $gol->id }}">{{ $gol->pangkat . ' - ' . $gol->golongan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Foto</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="" placeholder="upload foto"
                                    name="image">
                            </div>
                        </div>


                    </div>

                    <div class="box-footer text-left">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-default">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>

                </form> --}}


                <!-- form start -->
                {{-- <form action="{{ route('pegawai.store') }}" method="post">
                    @csrf
                    <div class="box-body">

                        <div class="form-group row @error('golongan') has-error @enderror">
                            <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" name="jabatan" class="form-control" id=""
                                    placeholder="jabatan" value="{{ old('jabatan') }}">
                                @error('jabatan')
                                    <div class="help-block small">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer text-right">
                        <a href="{{ route('jabatan.index') }}" class="btn btn-default">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form> --}}
            </div>
            <!-- /.box -->
        </div>

    </div>
@endsection
