@extends('templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- main title -->
        <div class="col-12">
            <div class="main__title">
                <h2>Tambah Genre</h2>
            </div>
        </div>
        <!-- end main title -->

        <!-- form -->
        <div class="col-12">
            <form action="" method="POST" class="form">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form__group">
                            <input type="text" name="nama_genre" class="form__input" placeholder="Genre">
                        </div>
                        <div class="form__group">
                            <select name="status" class="js-example-basic-single" id="quality">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
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
