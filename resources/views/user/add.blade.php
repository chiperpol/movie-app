@extends('templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- main title -->
        <div class="col-12">
            <div class="main__title">
                <h2>Tambah User</h2>
            </div>
        </div>
        <!-- end main title -->

        <!-- form -->
        <div class="col-12">
            <form action="#" method="POST" class="form">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form__group">
                            <input type="text" name="name" class="form__input" placeholder="Nama">
                        </div>
                        <div class="form__group">
                            <input type="email" name="email" class="form__input" placeholder="Email">
                        </div>
                        <div class="form__group">
                            <input type="password" name="password" class="form__input" placeholder="Password">
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
