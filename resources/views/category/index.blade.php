@extends('layouts.template')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/category/create">
                                <button type="button" class="btn btn-primary">
                                    Tambah Kategori Buku
                                </button>
                            </a>
                        </div>

                        <div class="flash-data" data-flashdata="{{ session('status') }}"></div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead style="border-bottom:0;">
                                        <tr style="border-bottom:0;">
                                            <th style="border-bottom:0;">Kode Kategori</th>
                                            <th style="border-bottom:0;">Nama Kategori</th>
                                            <th style="width: 15px; border-bottom:0;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $categori)
                                            @if ($categori->delete_at == '0')
                                                <tr>
                                                    <td>{{ $categori->kode_category }}</td>
                                                    <td>{{ $categori->name }}</td>
                                                    <td>
                                                        <div class="d-inline-flex gap-2">
                                                            <div class="rounded-circle">
                                                                <a
                                                                    href="{{ route('category.edit', ['id' => $categori->id]) }}">
                                                                    <button type="button" class="btn btn-sm btn-primary"><i
                                                                            class="fa-regular fa-pen-to-square"></i></button>
                                                                </a>
                                                            </div>
                                                            <form
                                                                action="{{ route('categori.delete', ['id' => $categori->id]) }}"
                                                                method="post" id="form-delete-visi"
                                                                class="form-delete  m-0">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" name="btn-hapus"
                                                                    class="btn-hapus btn btn-sm btn-danger"><i
                                                                        class="fa-solid fa-trash-can"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
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
