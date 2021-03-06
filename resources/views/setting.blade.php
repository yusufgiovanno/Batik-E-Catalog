@extends('base')
@section('content')
    @if (\Session::has('info'))
        <div class="alert alert-success alert-dismissible" id="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Sukses!</strong> {{ \Session::get('info') }}
        </div>
    @endif
    <h4 class="text-center">Pengaturan</h4>
    <div class="container">
        <form method="POST" action="/settings" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label>Tentang</label>
                    <textarea type="text" name="tentang" class="form-control">{{ $data->Tentang }}
                            </textarea>
                    <label>Nama Instagram 1</label>
                    <input type="text" name="instagram" value="{{ $data->Instagram }}" class="form-control">
                    <label>Link Instagram 1</label>
                    <input type="text" name="linkinstagram" value="{{ $data->LinkInstagram }}" class="form-control">
                    <label>Nama Instagram 2</label>
                    <input type="text" name="facebook" value="{{ $data->Facebook }}" class="form-control">
                    <label>Link Instagram 2</label>
                    <input type="text" name="linkfacebook" value="{{ $data->LinkFacebook }}" class="form-control">
                    <label>Nama Instagram 3</label>
                    <input type="text" name="instagram2" value="{{ $data->Instagram2 }}" class="form-control">
                    <label>Link Instagram 3</label>
                    <input type="text" name="linkinstagram2" value="{{ $data->LinkInstagram2 }}" class="form-control">
                    <label>Kode Video</label>
                    <input type="text" name="video" value="{{ $data->Video }}" class="form-control">
                </div>
                <div class="col-md-4">
                    <label>Foto Slide 1</label><br>
                    <input type="file" name="slide1" id="s1" class="mids"><br>
                    <img id="f1" src="{{ url('storage/Slides/' . $data->Slide1) }}" class="img img-fluid img-thumbnail mids"
                        style="max-height:150px"><br>
                    <label>Foto Slide 2</label><br>
                    <input type="file" name="slide2" id="s2" class="mids"><br>
                    <img id="f2" src="{{ url('storage/Slides/' . $data->Slide2) }}" class="img img-fluid img-thumbnail mids"
                        style="max-height:150px"><br>

                </div>
                <div class="col-md-4">
                    <label>Foto Slide 3</label><br>
                    <input type="file" name="slide3" id="s3" class="mids"><br>
                    <img id="f3" src="{{ url('storage/Slides/' . $data->Slide3) }}" class="img img-fluid img-thumbnail mids"
                        style="max-height:150px"><br>
                    <label>Foto Slide 4</label><br>
                    <input type="file" name="slide4" id="s4" class="mids"><br>
                    <img id="f4" src="{{ url('storage/Slides/' . $data->Slide4) }}" class="img img-fluid img-thumbnail mids"
                        style="max-height:150px"><br>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm rounded-0 shadow" style="float:right; margin-bottom:20px">
                <i class="icon-save"></i> Simpan
            </button>
        </form>
    </div>

    <script>
        function readUrl(input, preview) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#' + preview).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#s1').change(function() {
            readUrl(this, 'f1');
        });
        $('#s2').change(function() {
            readUrl(this, 'f2');
        });
        $('#s3').change(function() {
            readUrl(this, 'f3');
        });
        $('#s4').change(function() {
            readUrl(this, 'f4');
        });
    </script>
@endsection
