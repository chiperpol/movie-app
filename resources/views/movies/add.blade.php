@extends('templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- main title -->
        <div class="col-12">
            <div class="main__title">
                <h2>Add new item</h2>
            </div>
        </div>
        <!-- end main title -->

        <!-- form -->
        <div class="col-12">
            <form action="{{ route('movies.store') }}" method="POST" class="form">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-5 form__cover">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-12">
                                <div class="form__img">
                                    <label for="form__img-upload">Upload cover (190 x 270)</label>
                                    <input id="form__img-upload" name="cover" type="file" accept=".png, .jpg, .jpeg">
                                    <img id="form__img" src="#" alt=" ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-7 form__content">
                        <div class="row">
                            <div class="col-12">
                                <div class="form__group">
                                    <input type="text" name="judul" class="form__input" placeholder="Judul" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form__group">
                                    <textarea id="text" name="desc" class="form__textarea" placeholder="Deskripsi"></textarea>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="form__group">
                                    <input type="number" min="0" class="form__input" name="tahun_terbit" placeholder="Tahun Rilis" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="form__group">
                                    <input type="number" min="0" class="form__input" name="durasi" placeholder="Durasi" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="form__group">
                                    <select name="quality_id" class="js-example-basic-single" id="quality" required>
                                        @foreach ($qualitys as $quality)
                                            <option value="{{ $quality->id }}">{{ $quality->nama_quality }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="form__group">
                                    <select name="status" class="js-example-basic-single" id="status">
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="form__group">
                                    <select name="negara_id" class="js-example-basic-single" id="country" required>
                                        @foreach($negaras as $negara)
                                            <option value="{{ $negara->id }}">{{ $negara->nama_negara }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="form__group">
                                    <select name="genre_id" class="js-example-basic-single" id="genre" required>
                                        @foreach ($genres as $genre)
                                            <option value="{{ $genre->id }}">{{ $genre->nama_genre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form__gallery">
                                    <label id="gallery1" for="form__gallery-upload">Upload Foto</label>
                                    <input data-name="#gallery1" id="form__gallery-upload" name="foto" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg" multiple>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <ul class="form__radio">
                            <li>
                                <span>Tipe Film :</span>
                            </li>
                            <li>
                                <input id="video" type="radio" name="type_film" value="video" checked>
                                <label for="video">Video</label>
                            </li>
                            <li>
                                <input id="link" type="radio" name="type_film" value="link">
                                <label for="link">Link</label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-12" id="upload_video">
                        <div class="form__video">
                            <label id="movie1" for="form__video-upload">Upload video</label>
                            <input data-name="#movie1" id="form__video-upload" name="film" class="form__video-upload" type="file" accept="video/mp4,video/x-m4v,video/*">
                        </div>
                    </div>

                    <div class="col-12 col-lg-12" id="link_video" style="display: none">
                        <div class="form__group form__group--link">
                            <input type="text" name="film" class="form__input" placeholder="or add a link">
                        </div>
                    </div>

                    <div class="col-12" style="text-align: -webkit-right">
                        <button type="submit" class="form__btn">publish</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- end form -->
    </div>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function () {
        $("input[name='type_film']").change(function () {
            if ($(this).val() === "video") {
                $("#upload_video").show();
                $("#link_video").hide();
            } else {
                $("#upload_video").hide();
                $("#link_video").show();
            }
        });
    });
</script>
@endsection
