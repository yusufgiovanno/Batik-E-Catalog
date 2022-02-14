@extends('base')
@section('content')

    <!-- Modal Edit -->
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
                        <label>Kode Produk</label>
                        <input type="text" class="form-control" name="kode" id="kode">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                        <label>Foto Produk</label>
                        <input type="file" class="form-control" name="foto" id="foto">
                        <img class="img img-fluid img-thumbnail" style="max-height:250px;" id="preview">
                        <br>
                        <label>Kategori Gender</label>
                        <select class="form-control" name="katGender" id="katGender">
                            <option selected disabled></option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                            <option>Unisex</option>
                        </select>
                        <label>Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option selected disabled></option>
                            @foreach ($kat as $k)
                                <option value="{{ $k->id }}">{{ $k->Kategori }}</option>
                            @endforeach
                        </select>
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

    <!-- Modal Kategori -->
    <div class="modal" id="myModal2">
        <form enctype="multipart/form-data" action="/kategori-store" method="post" id="forms2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Manajemen Kategori</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        @csrf
                        <h4 class="text-center">Manajemen Kategori</h4>
                        <div class="row" style="margin-left: auto; margin-right:auto;">
                            <div class="col-md-3">
                                <label>Id</label>
                                <input name="idk" id="idk" readonly class="form-control">
                            </div>
                            <div class="col-md-7">
                                <label>Nama Kategori</label>
                                <input class="form-control" name="kats" id="kats">
                            </div>
                            <div class="col-md-2">
                                <label class="text-light">Clear</label>
                                <button type="button" class="btn btn-danger shadow" onclick="clearKat()"> Clear</button>
                            </div>
                        </div>
                        <br>
                        <h6 class="text-center">Daftar Kategori</h6>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kat as $k)
                                <p hidden id="idk{{$k->id}}">{{$k->id}}</p>
                                <p hidden id="kats{{$k->id}}">{{$k->Kategori}}</p>
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$k->Kategori}}</td>
                                        <td>
                                            <button class="btn shadow" type="button" onclick="editKat({{$k->id}})"><i class="icon-edit"></i></button>
                                            <a href="kategori-delete/{{$k->id}}" class="btn shadow"> <i class="icon-delete"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
        <button type="button" class="btn btn-primary btn-sm shadow" data-toggle="modal" data-target="#myModal"
            style="float: left" onclick="create()">
            <i class="fas fa-plus"></i> Produk
        </button>
        <button class="btn btn-primary btn-sm shadow" data-toggle="modal" data-target="#myModal2"><i
                class="icon-tags"></i> Kategori</button>
        <br>
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
                    <p hidden id="foto{{ $d->id }}">{{ url('storage/' . $d->ProdukFoto) }}</p>
                    <p hidden id="desc{{ $d->id }}">{{ $d->ProdukDesc }}</p>
                    <p hidden id="harga{{ $d->id }}">{{ $d->ProdukHarga }}</p>
                    <p hidden id="kode{{ $d->id }}">{{ $d->ProdukKode }}</p>
                    <p hidden id="kode{{ $d->id }}">{{ $d->ProdukKode }}</p>
                    <p hidden id="kategori{{ $d->id }}">{{ $d->KategoriId }}</p>
                    <p hidden id="katGender{{ $d->id }}">{{ $d->Gender }}</p>
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td><img src="{{ url('storage/' . $d->ProdukFoto) }}"
                                class="img img-fluid img-thumbnail value-img" style="max-height: 75px" alt="Foto Produk">
                        </td>
                        <td>{{ $d->ProdukNama }}</td>
                        <td>{{ $d->ProdukDesc }}</td>
                        <td>Rp. {{ number_format($d->ProdukHarga, 0, '', '.') }}</td>
                        <td>
                            @if ($d->ProdukStatus == 0)
                                <i class="icon-archive text-secondary" data-toggle="tooltip" title="Draft"></i>
                            @elseif ($d->ProdukStatus == 1)
                                <i class="icon-eye text-success" data-toggle="tooltip" title="Publish"></i>
                            @else
                                <i class="icon-eye-slash text-danger" data-toggle="tooltip" title="Arsip"></i>
                            @endif
                        </td>
                        <td>{{ $d->ProdukWP }}</td>
                        <td>
                            <button type="button" class="btn" onclick="edits({{ $d->id }})"
                                data-toggle="modal" title="Edit" data-target="#myModal"><i data-toggle="tooltip"
                                    class="icon-edit"></i></button>|
                            <a href="{{ $d->ProdukStatus == 1 ? '#' : '/produk-publish?id=' . $d->id }}"><i
                                    class="shadow icon-eye text-success" data-toggle="tooltip" title="to Publish"></i></a> |
                            <a href="{{ $d->ProdukStatus == 2 ? '#' : '/produk-archive?id=' . $d->id }}"><i
                                    class="shadow icon-eye-slash text-danger" data-toggle="tooltip"
                                    title="to Arsip"></i></a>
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
            $('#desc').val($('#desc' + i).text());
            $('#harga').val($('#harga' + i).text());
            $('#kode').val($('#kode' + i).text());
            $('#kategori').val($('#kategori' + i).text());
            $('#katGender').val($('#katGender' + i).text());
            $('#preview').prop('src', $('#foto' + i).text());
        }

        function editKat(i){
            $('#forms2').prop('action', 'kategori-update');
            $('#kats').val($('#kats' + i).text());
            $('#idk').val($('#idk' + i).text());
        }

        function clearKat(){
            $('#forms2').prop('action', 'kategori-store');
            $('#kats').val('');
            $('#idk').val('');
        }

        function create() {
            $('#forms').prop('action', 'produk-store');
            $('#id').val('');
            $('#nama').val('');
            $('#preview').prop('src', '');
            $('#desc').val('');
            $('#harga').val('');
            $('#kode').val('');
            $('#katGender').val('');
            $('#kategori').val('');
        }

        function readUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#foto').change(function() {
            readUrl(this);
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
