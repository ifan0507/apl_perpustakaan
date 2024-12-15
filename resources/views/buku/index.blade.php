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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead style="border-bottom:0;">
                                        <tr style="border-bottom:0;">
                                            <th style="border-bottom:0;">Kode</th>
                                            <th style="border-bottom:0;">Judul</th>
                                            <th style="border-bottom:0;">Jenis</th>
                                            <th style="border-bottom:0;">Kategori</th>
                                            <th style="border-bottom:0;">Pengarang</th>
                                            <th style="border-bottom:0;">ISBN</th>
                                            <th style="border-bottom:0;">Penerbit</th>
                                            <th style="border-bottom:0;">Tahun Terbit</th>
                                            <th style="border-bottom:0;">Bahasa</th>
                                            <th style="border-bottom:0;">Jumlah Halaman</th>
                                            <th style="width: 15px; border-bottom:0;">Action</th>
                                        </tr>
                                    </thead>
                                    {{-- <tbody>
                                        @foreach ($visiMisis as $visiMisi)
                                            <tr>
                                                <td>{{ $visiMisi->visi }}</td>
                                                <td>{{ $visiMisi->misi }}</td>
                                                <td>
                                                    <div class="d-inline-flex gap-2">
                                                        <div class="rounded-circle">
                                                            <button type="button" class="btn-edit-visi btn btn-sm"
                                                                style="background-color: #060d51; color: white"
                                                                data-id="{{ $visiMisi->id }}"><i
                                                                    class="fa-regular fa-pen-to-square"></i></button>
                                                        </div>
                                                        <form
                                                            action="{{ route('visiMisi.delete', ['id' => $visiMisi->id]) }}"
                                                            method="post" id="form-delete-visi" class="form-delete  m-0">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" name="btn-hapus"
                                                                style="background-color: #060d51; color: white"
                                                                class="btn-hapus btn btn-sm"><i
                                                                    class="fa-solid fa-trash-can"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody> --}}
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
