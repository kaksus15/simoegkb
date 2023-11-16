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

                <form class="form-horizontal" action="{{ route('pasangan.store') }}" method="post">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">Nama Pegawai</label>
                            <div class="col-xs-6">
                                <select name="pegawai_id" class="form-control select2">
                                    <option selected disabled>Pilih Nama Pegawai</option>
                                    @foreach ($pegawai as $peg)
                                        <option value="{{ $peg->id }}">{{ $peg->nama . ' - ' . $peg->nip }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">NIK</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="" placeholder="NIK" name="nik">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-xs-2 control-label">Nama Suami/Isteri</label>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" id="" placeholder="Nama" name="nama">
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
                            <label for="" class="col-xs-2 control-label">Pendidikan</label>
                            <div class="col-xs-6">
                                <select class="form-control select2" name="pendidikan">
                                    <option selected disabled>Pilih Pendidikan</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTA">SLTA</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-xs-2 control-label">Pekerjaan</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="" name="pekerjaan"
                                placeholder="Pekerjaan">
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

                </form>


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
