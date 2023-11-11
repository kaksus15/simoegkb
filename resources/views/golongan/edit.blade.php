@extends('layouts.app')

@section('title', 'Edit Golongan')

@section('contents')

    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
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


                <!-- form start -->
                <form action="{{ route('golongan.update', $gol->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="box-body">
                        <div class="form-group row @error('golongan') has-error @enderror">
                            <label for="" class="col-sm-2 col-form-label">Golongan</label>
                            <div class="col-sm-10">
                                <input type="text" name="golongan" class="form-control" id=""
                                    placeholder="golongan" value="{{ old('golongan', $gol->golongan) }}">
                                @error('golongan')
                                    <div class="help-block small">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row @error('pangkat') has-error @enderror">
                            <label for="" class="col-sm-2 col-form-label">Pangkat</label>
                            <div class="col-sm-10">
                                <input type="text" name="pangkat" class="form-control" id=""
                                    placeholder="pangkat" value="{{ old('pangkat') ?? $gol->pangkat }}">
                                @error('pangkat')
                                    <div class="help-block small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer text-right">
                        <a href="{{ route('golongan.index') }}" class="btn btn-default">Batal</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>

    </div>
@endsection
