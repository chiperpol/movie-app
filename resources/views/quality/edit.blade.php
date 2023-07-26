@extends('templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- main title -->
        <div class="col-12">
            <div class="main__title">
                <h2>Edit Quality</h2>
            </div>
        </div>
        <!-- end main title -->

        <!-- form -->
        <div class="col-12">
            <form action="{{ route('quality.update', $quality->id) }}" method="POST" class="form">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="form__group">
                            <input type="text" name="nama_quality" class="form__input" placeholder="Quality" value="{{ $quality->nama_quality }}">
                        </div>
                        <div class="form__group">
                            <select name="status" class="js-example-basic-single" id="quality">
                                <option value="1" @if($quality->status == 1) selected @endif >Active</option>
                                <option value="0" @if($quality->status == 0) selected @endif>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="text-align: -webkit-right;">
                        <button type="submit" class="form__btn"><i class="icofont-save mr-2"></i> simpan</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- end form -->
    </div>
</div>
@endsection
