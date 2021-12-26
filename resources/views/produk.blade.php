@extends('base')
@section('content')
    <div class="modal" id="myModal">
        <form enctype="multipart/form-data" action="/produk-store" method="post" id="forms">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Produk</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                        <label>Foto Produk</label>
                        <input type="file" class="form-control" name="foto" id="foto">
                        <label>Deskripsi Produk</label>
                        <input type="text" class="form-control" name="desc" id="desc">
                        <label>Harga Produk</label>
                        <input type="text" class="form-control" name="harga" id="harga">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <br>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" style="float: left" onclick="create()">
            <i class="fas fa-plus"></i> Produk
        </button>
        <h4 class="text-center">
            Master Produk
        </h4>

        <table class="table table-hover table-striped" id="dtb">
            <thead class="table-dark">
                <th>No</th>
                <th>Foto</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Waktu Publish</th>
                <th>Pengaturan</th>
            </thead>
            <tbody>
                @foreach ($datas as $d)
                    <p hidden id="id{{ $d->id }}">{{ $d->id }}</p>
                    <p hidden id="nama{{ $d->id }}">{{ $d->ProdukNama }}</p>
                    <p hidden id="foto{{ $d->id }}">{{ $d->ProdukFoto }}</p>
                    <p hidden id="desc{{ $d->id }}">{{ $d->ProdukDesc }}</p>
                    <p hidden id="harga{{ $d->id }}">{{ $d->ProdukHarga }}</p>
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td><img src="{{ $d->ProdukFoto }}" class="img img-fluid img-thumbnail value-img"
                                style="max-height: 75px"></td>
                        <td>{{ $d->ProdukNama }}</td>
                        <td>{{ $d->ProdukDesc }}</td>
                        <td>Rp. {{ number_format($d->ProdukHarga, 0, '', '.') }}</td>
                        <td>
                            @if ($d->ProdukStatus == 0)
                                <i class="fas fa-archive text-secondary"></i>
                            @elseif ($d->ProdukStatus == 1)
                                <i class="fas fa-eye text-success"></i>
                            @else
                                <i class="fas fa-eye-slash text-danger"></i>
                            @endif
                        </td>
                        <td>{{ $d->ProdukWP }}</td>
                        <td>
                            <button type="button" class="btn" onclick="edits({{ $d->id }})" data-toggle="modal" data-target="#myModal"><i class="fas fa-edit"></i></button>|
                            <a href="/produk-publish?id={{ $d->id }}"><i class="fas fa-eye text-success"></i></a> |
                            <a href="/produk-archive?id={{ $d->id }}"><i
                                    class="fas fa-eye-slash text-danger"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    </div>

    <script>
        function edits(i) {
            $('#forms').prop('action', 'produk-update');
            $('#id').val($('#id' + i).text());
            $('#nama').val($('#nama' + i).text());
            //$('#foto').val($('#foto' + i).text());
            $('#desc').val($('#desc' + i).text());
            $('#harga').val($('#harga' + i).text());
        }

        function create() {
            $('#forms').prop('action', 'produk-store');
            $('#id').val('');
            $('#nama').val('');
            //$('#foto').val('');
            $('#desc').val('');
            $('#harga').val('');
        }
    </script>
@endsection
