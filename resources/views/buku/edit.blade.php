@extends('layouts.template')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6>Update Buku</h6>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('buku.update', ['id' => $buku->id]) }}" method="post" id="">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="kode_buku" class="col-form-label">Kode Buku <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control @error('kode_buku') is-invalid @enderror"
                                        id="kode_buku" name="kode_buku" value="{{ old('kode_buku', $buku->kode_buku) }}">
                                    @error('kode_buku')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="judul" class="col-form-label">Judul <span class="required"
                                            style="color:red">*</span></label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                        id="judul" name="judul" value="{{ old('judul', $buku->judul) }}">
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
                                        id="pengarang" name="pengarang" value="{{ old('pengarang', $buku->pengarang) }}">
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
                                        id="penerbit" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}">
                                    @error('penerbit')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="thn_terbit" class="col-form-label">Tahun Terbit <span class="required"
                                            style="color:red">*</span></label>
                                    <select name="thn_terbit" id="thn_terbit" class="form-control select2">
                                        {{-- <option value="" disabled selected>Pilih Tahun</option> --}}
                                        @for ($thn_terbit = 2000; $thn_terbit <= date('Y'); $thn_terbit++)
                                            <option value="{{ $thn_terbit }}"
                                                {{ old('thn_terbit', $buku->tahun_terbit ?? '') == $thn_terbit ? 'selected' : '' }}>
                                                {{ $thn_terbit }}
                                            </option>
                                        @endfor
                                    </select>
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
                                        id="isbn" name="isbn" value="{{ old('isbn', $buku->isbn) }}">
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
                                        id="jml_halaman" name="jml_halaman"
                                        value="{{ old('jml_halaman', $buku->jumlah_halaman) }}">
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
                                        <option value="indonesia"
                                            {{ old('bahasa', $buku->bahasa) == 'indonesia' ? 'selected' : '' }}>
                                            Indonesia</option>
                                        <option value="inggris"
                                            {{ old('bahasa', $buku->bahasa) == 'inggris' ? 'selected' : '' }}>Inggris
                                        </option>
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
                                            <option value="{{ $data->id }}"
                                                {{ old('kategori', $buku->category->id) == $data->id ? 'selected' : '' }}>
                                                {{ $data->name }}</option>
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
                                        <option value="piksi"
                                            {{ old('jenis', $buku->jenis) == 'piksi' ? 'selected' : '' }}>Piksi</option>
                                        <option value="non-piksi"
                                            {{ old('jenis', $buku->jenis) == 'non-piksi' ? 'selected' : '' }}>Non Piksi
                                        </option>
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
