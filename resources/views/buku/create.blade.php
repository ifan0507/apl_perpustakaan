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
                                    <label for="judul" class="col-form-label">Judul <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                        id="judul" name="judul">
                                    @error('judul')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="pengarang" class="col-form-label">Pengarang <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control @error('pengarang') is-invalid @enderror"
                                        id="pengarang" name="pengarang">
                                    @error('pengarang')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="penerbit" class="col-form-label">Penerbit<span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control @error('penerbit') is-invalid @enderror"
                                        id="penerbit" name="penerbit">
                                    @error('penerbit')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="thn_terbit" class="col-form-label">Tahun Terbit <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="date" class="form-control @error('thn_terbit') is-invalid @enderror"
                                        id="thn_terbit" name="thn_terbit">
                                    @error('thn_terbit')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="isbn" class="col-form-label">ISBN <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control @error('isbn') is-invalid @enderror"
                                        id="isbn" name="isbn">
                                    @error('isbn')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="jml_halaman" class="col-form-label">Jumlah Halaman<span class="required"
                                            style="color:red">*</span></label>
                                    <input type="number" class="form-control @error('jml_halaman') is-invalid @enderror"
                                        id="jml_halaman" name="jml_halaman">
                                    @error('jml_halaman')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="jml_halaman" class="col-form-label">Bahasa Buku<span class="required"
                                            style="color:red">*</span></label>
                                    <select class="form-select @error('bahasa') is-invalid @enderror"
                                        aria-label="Default select example" name="bahasa">
                                        <option selected disabled>Pilih Bahasa</option>
                                        <option value="indonesia">Indonesia</option>
                                        <option value="inggris">Inggris</option>
                                    </select>
                                    @error('bahasa')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="jml_halaman" class="col-form-label">Kategori Buku<span class="required"
                                            style="color:red">*</span></label>
                                    <select class="form-select @error('kategori') is-invalid @enderror"
                                        aria-label="Default select example" name="kategori">
                                        <option selected disabled>Pilih Kategori</option>
                                        @foreach ($category as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="jml_halaman" class="col-form-label">Jenis Buku<span class="required"
                                            style="color:red">*</span></label>
                                    <select class="form-select @error('jenis') is-invalid @enderror"
                                        aria-label="Default select example" name="jenis">
                                        <option selected disabled>Pilih Jenis</option>
                                        <option value="piksi">Piksi</option>
                                        <option value="non-piksi">Non Piksi</option>
                                    </select>
                                    @error('jenis')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>

        <!-- /.container-fluid -->
    </section>
@endsection
