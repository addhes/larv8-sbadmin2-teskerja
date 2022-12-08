@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-11">
                <div class="row mx-auto">
                    <i class="fa fa-music mt-1"></i>
                    <h4 class="ml-1">Catalog </h4>
                    <h4 class="text-secondary ml-1"> Tambah</h4>
                </div>
                <div class="row mx-auto">
                    <p style="margin-top: -10px;">Catalog Management Dashboard</p>
                </div>
            </div>
            <div class="col pl-4">
                <a class="btn btn-secondary"><i class="fa fa-list-ul mt-1"></i> List</a>
            </div>
        </div>

        <hr class="sidebar-divider d-none d-md-block">
        <form action="{{ route('catlog.store') }}" method="POST" id="anggota_form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="PR{{ str_pad($colgu, 3, '0', STR_PAD_LEFT) }}" name="no">
        <div class="row">
            <div class="col-lg-2">
                <div class="form-group">
                    <div class="card">
                        <img src="https://kubalubra.is/wp-content/uploads/2017/11/default-thumbnail.jpg" id="preview" class="img-thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <label class="form-label" for="cover_atwork">{{ __('Cover Atwork') }}</label>
                        <span class="text-danger">*</span>
                        <div id="msg"></div>
                            <input type="file" name="cover_atwork" class="file" accept="image/*" style="visibility: hidden; position: absolute;">
                            <div class="input-group">
                                <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                <div class="input-group-append">
                                    <button type="button" class="browse btn btn-primary">Browse</button>
                                </div>
                            </div>
                        <p style="font-size: 11px;">Minimum size is 1440x1440 pixels and maximum is 5000x5000 pixels, with square dimensions</p>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="production_year">{{ __('Production Year') }}</label>
                        <span class="text-danger">*</span>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="production_year" id="production_year" value="{{ old("production_year") }}">
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-6">
                        <label class="form-label" for="title">{{ __('Title') }}</label>
                        <span class="text-danger">*</span>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="title" id="title" value="{{ old("title") }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="first_release_date">{{ __('First Release Date') }}</label>
                        <span class="text-danger">*</span>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="first_release_date" id="first_release_date" placeholder="dd/mm/yyyy" value="{{ old("first_release_date") }}">
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-6">
                        <label class="form-label" for="artis_name">{{ __('Artis Name') }}</label>
                        {{-- <span class="text-danger">*</span> --}}
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="artis_name" id="artis_name" value="{{ old("artis_name") }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="release_date">{{ __('Release Date') }}</label>
                        <span class="text-danger">*</span>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="release_date" id="release_date" placeholder="dd/mm/yyyy" value="{{ old("release_date") }}">
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-6">
                        <label class="form-label" for="genre">{{ __('Genre') }}</label>
                        <span class="text-danger">*</span>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="genre" id="genre" value="{{ old("genre") }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="lyric_language">{{ __('Lyric Language') }}</label>
                        <span class="text-danger">*</span>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="lyric_language" id="lyric_language" value="{{ old("lyric_language") }}">
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-6">
                        <label class="form-label" for="sub_genre">{{ __('Sub Genre') }}</label>
                        {{-- <span class="text-danger">*</span> --}}
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="sub_genre" id="sub_genre" value="{{ old("sub_genre") }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="lyric_url">{{ __('Lyric Url') }}</label>
                        {{-- <span class="text-danger">*</span> --}}
                        <div class="form-control-wrap">
                            <input type="file" class="form-control" name="lyric_url" id="lyric_url" value="{{ old("lyric_url") }}">
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-6">
                        <label class="form-label" for="record_label">{{ __('Record Label') }}</label>
                        <span class="text-danger">*</span>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="record_label" id="record_label" value="{{ old("record_label") }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="description">{{ __('Description') }}</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control" name="description" value="{{ old("description") }}"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-6">
                        <label class="form-label" for="produced_by">{{ __('Produced By') }}</label>
                        {{-- <span class="text-danger">*</span> --}}
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="produced_by" id="produced_by" value="{{ old("produced_by") }}">
                        </div>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>

            </div>
        </div>

        <a class="btn btn-primary"><i class="fa fa-upload mt-1"></i> Upload Audio</a>

        <div class="row mt-1">
            <div class="col-lg-4">
                <div class="card bg-danger">
                    <p class="mx-3 pt-2 text-white">Filename Format : <br>Main Artist Name - Song Title (composer) <br> Ex: Thomas Arya - Berbeza Kasta (Rajali Asmara)</p>
                    {{-- <p class="mx-2 text-white">Main Artist Name - Song Title (composer)</p>
                    <p class="mx-2 text-white">Main Artist Name - Song Title (composer)</p> --}}
                </div>
            </div>
            <div class="col-lg-9">
            </div>
        </div><br>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Artis Name</th>
                    <th scope="col">Composer</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><input class="form-control"></td>
                    <td><input class="form-control"></td>
                    <td>pending</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input class="form-control"></td>
                    <td><input class="form-control"></td>
                    <td>pending</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input class="form-control"></td>
                    <td><input class="form-control"></td>
                    <td>pending</td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-between">
            <button type="submit" id="submit_btn" class="btn btn-success"><i class="fa fa-save"></i> Submit</button>
            <a href="{{ route('catlog.index') }}" class="btn btn-warning"><i class="fa fa-reply"></i> Kembali</a>
        </div>

    </div>
        </form>
</div>
@endsection

@push('css')
<link href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
@endpush

@push('js')
<script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).on("click", ".browse", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            //Initiate the JavaScript Image object.
            var image = new Image();
            //Set the Base64 string return from FileReader as source.
            image.src = e.target.result;

            image.onload = function () {
                var height = this.height;
                var width = this.width;
                if (height < 1440 || width < 1440) {
                Swal.fire(
                    'Ukuran pixel kurang dari Minimum!',
                    width + " width " + height +" height",
                    $('.file').val(''),
                    $('#file').val(''),
                )
                return false;

                } else if(height > 5000 || width > 5000) {
                    Swal.fire(
                    'Ukuran pixel lebih dari Maximum!',
                     width + " width " + height +" height",
                    $('.file').val(''),
                    $('#file').val(''),
                )
                return false;
                } else {
                    document.getElementById("preview").src = e.target.result;
                }
            };
            // get loaded data and render thumbnail.
            
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

</script>
<script>
    $(document).ready(function() {
        $('#production_year').datepicker({
            format: "yyyy"
            , viewMode: "years"
            , minViewMode: "years"
        });

        $('#first_release_date').datepicker({
            format: "dd/mm/yyyy"
            , autoclose: true
            , orientation: "top"
        , });

        $('#release_date').datepicker({
            format: "dd/mm/yyyy"
            , autoclose: true
            , orientation: "top"
        , });
    })
</script>

<script>
    $(document).ready(function() {

        $('#submit_btn').on('click', function(e) {
            var cover_atwork = document.forms["anggota_form"]["cover_atwork"]; 
            var title = document.forms["anggota_form"]["title"]; 
            {{-- var artis_name = document.forms["anggota_form"]["artis_name"];  --}}
            var genre = document.forms["anggota_form"]["genre"]; 
            {{-- var sub_genre = document.forms["anggota_form"]["sub_genre"];  --}}
            var record_label = document.forms["anggota_form"]["record_label"]; 
            var produced_by = document.forms["anggota_form"]["produced_by"]; 
            var production_year = document.forms["anggota_form"]["production_year"]; 
            var first_release_date = document.forms["anggota_form"]["first_release_date"]; 
            var release_date = document.forms["anggota_form"]["release_date"]; 
            var lyric_language = document.forms["anggota_form"]["lyric_language"];

            if(cover_atwork.value == ""){
            Swal.fire({
                icon: 'error',
                text: 'Cover Atwork wajib diupload!',
            });
            $('#confirmationModal').modal('hide');

            return false;
            } 

            if(title.value == ""){
            Swal.fire({
                icon: 'error',
                text: 'Kolom Title wajib diisi!',
            });
            $('#confirmationModal').modal('hide');

            return false;
            } 

            if(genre.value == ""){
            Swal.fire({
                icon: 'error',
                text: 'Kolom Genre wajib diisi!',
            });
            $('#confirmationModal').modal('hide');

            return false;
            } 

            if(record_label.value == ""){
            Swal.fire({
                icon: 'error',
                text: 'Kolom Record Label wajib diisi!',
            });
            $('#confirmationModal').modal('hide');

            return false;
            }
            
            if(production_year.value == ""){
            Swal.fire({
                icon: 'error',
                text: 'Kolom Production Year wajib diisi!',
            });
            $('#confirmationModal').modal('hide');

            return false;
            }

            if(first_release_date.value == ""){
            Swal.fire({
                icon: 'error',
                text: 'Kolom First Release Date wajib diisi!',
            });
            $('#confirmationModal').modal('hide');

            return false;
            }

            if(lyric_language.value == ""){
            Swal.fire({
                icon: 'error',
                text: 'Kolom Lyric Language wajib diisi!',
            });
            $('#confirmationModal').modal('hide');

            return false;
            }

        })
    })
</script>
@endpush
