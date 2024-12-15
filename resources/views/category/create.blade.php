@extends('layouts.template')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6>Tambah Kategori</h6>
                        </div>
                        <!-- /.card-header -->
                        <form action="/category" method="post" id="">
                            @csrf
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="kode_category" class="col-form-label">Kode Kategori <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text"
                                        class="@error('kode_category') is-invalid @enderror
                                        form-control"
                                        id="kode_kategory" name="kode_category">
                                    @error('kode_category')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="col-form-label">Nama <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text" class="@error('name') is-invalid @enderror form-control"
                                        id="name" name="name">
                                    @error('name')
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
