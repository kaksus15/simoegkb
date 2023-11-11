@extends('layouts.app')

@section('title', 'Edit Jabatan')

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
                <form action="{{ route('jabatan.update', $jab->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="box-body">
                        <div class="form-group row @error('jabatan') has-error @enderror">
                            <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" name="jabatan" class="form-control" id=""
                                    placeholder="jabatan" value="{{ old('jabatan', $jab->jabatan) }}">
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
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>

    </div>
@endsection
