@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/buku/create">
                                <button type="button" class="btn btn-primary">
                                    Tambah Buku
                                </button>
                            </a>
                        </div>
                        <div class="flash-buku" data-flashData="{{ session('status') }}"></div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead style="border-bottom:0;">
                                        <tr style="border-bottom:0;">
                                            <th style="border-bottom:0;">Kode</th>
                                            <th style="border-bottom:0;">Kategori</th>
                                            <th style="border-bottom:0;">Jenis</th>
                                            <th style="border-bottom:0;">Judul</th>
                                            <th style="border-bottom:0;">Pengarang</th>
                                            <th style="border-bottom:0;">ISBN</th>
                                            <th style="border-bottom:0;">Penerbit</th>
                                            <th style="border-bottom:0;">Tahun Terbit</th>
                                            <th style="border-bottom:0;">Bahasa</th>
                                            <th style="border-bottom:0;">Jumlah Halaman</th>
                                            <th style="width: 15px; border-bottom:0;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bukus as $buku)
                                            <tr>
                                                <td>{{ $buku->kode_buku }}</td>
                                                <td>{{ $buku->category->name }}</td>
                                                <td>{{ $buku->jenis }}</td>
                                                <td>{{ $buku->judul }}</td>
                                                <td>{{ $buku->pengarang }}</td>
                                                <td>{{ $buku->isbn }}</td>
                                                <td>{{ $buku->penerbit }}</td>
                                                <td>{{ $buku->tahun_terbit }}</td>
                                                <td>{{ $buku->bahasa }}</td>
                                                <td>{{ $buku->jumlah_halaman }}</td>
                                                <td>
                                                    <div class="d-inline-flex gap-2">
                                                        <div class="rounded-circle">
                                                            <a href="{{ route('buku.edit', ['id' => $buku->id]) }}">
                                                                <button type="button" class="btn btn-sm btn-primary"><i
                                                                        class="fa-regular fa-pen-to-square"></i></button>
                                                            </a>
                                                        </div>
                                                        <form action="{{ route('buku.delete', ['id' => $buku->id]) }}"
                                                            method="post" class="form-delete  m-0">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" name="btn-hapus"
                                                                class="btn-hapus btn btn-sm btn-danger"><i
                                                                    class="fa-solid fa-trash-can"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
