@extends('layouts.template')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6>Update Kategori</h6>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post" id="">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="kode_category" class="col-form-label">Kode Kategori <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text"
                                        class="@error('e-kode_category') is-invalid @enderror
                                        form-control"
                                        id="kode_kategory" name="e-kode_category"
                                        value="{{ old('e-kode_category', $category->kode_category) }}">
                                    @error('e-kode_category')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="e-name" class="col-form-label">Nama <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text" class="@error('e-name') is-invalid @enderror form-control"
                                        id="e-name" name="e-name" value="{{ old('e-name', $category->name) }}">
                                    @error('e-name')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-secondary">Close</button>
                                <button type="submit" name="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
