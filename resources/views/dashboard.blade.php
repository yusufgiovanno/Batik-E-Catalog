@extends('base')
@section('content')
    @if (\Session::has('info'))
        <script>
            alert('{{ Session::get('info') }}')
        </script>
    @endif

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/password" method="post">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Ubah Password</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        @csrf
                        <div class="container" style="width:70%">
                            <label>Password Lama</label>
                            <input type="text" class="form-control" name="p1">
                            <label>Password Baru</label>
                            <input type="text" class="form-control" name="p2">
                            <label>Password Baru (Konfirmasi)</label>
                            <input type="text" class="form-control" name="p3">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <h4 class="text-center">Dashboard</h4>
        <div class="card-columns">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <a href="/produk"><i class="fas fa-cube"></i> Produk</a>
                </div>
            </div>
            <div class="card bg-light">
                <div class="card-body text-center">
                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-key"></i> Ubah Password</a>
                </div>
            </div>
            <div class="card bg-light">
                <div class="card-body text-center">
                    <a href="/settings"><i class="fas fa-gear"></i> Pengaturan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
