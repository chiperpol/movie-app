@extends('templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- main title -->
        <div class="col-12">
            <div class="main__title">
                <h2>Master Genre</h2>

                <span class="main__title-stat">total</span>

                <div class="main__title-wrap">
                    <form action="#" class="main__title-form mr-4">
                        <input type="text" placeholder="Find genre..">
                        <button type="button">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8.25998" cy="8.25995" r="7.48191" stroke="#2F80ED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle><path d="M13.4637 13.8523L16.3971 16.778" stroke="#2F80ED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </button>
                    </form>
                    <!-- end search -->

                    <a href="{{ route('genre.add') }}" class="main__title-link"><i class="icofont-plus mr-2"></i> Genre</a>
                </div>
            </div>
        </div>
        <!-- end main title -->

        <!-- users -->
        <div class="col-12">
            <div class="main__table-wrap mt-4">
                <table class="main__table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>GENRE</th>
                            <th>STATUS</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $nomor = 1;
                        @endphp
                        @foreach ($genres as $genre)
                        <tr>
                            <td>
                                <div class="main__table-text">{{ $nomor++ }}</div>
                            </td>
                            <td>
                                <div class="main__table-text">{{ $genre->nama_genre }}</div>
                            </td>
                            <td>
                                @if ($genre->status == 1)
                                    <div class="main__table-text main__table-text--green">Active</div>
                                @else
                                    <div class="main__table-text main__table-text--red">Inactive</div>
                                @endif
                            </td>
                            <td>
                                <div class="main__table-btns">
                                    <a href="" class="main__table-btn main__table-btn--edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,7.24a1,1,0,0,0-.29-.71L17.47,2.29A1,1,0,0,0,16.76,2a1,1,0,0,0-.71.29L13.22,5.12h0L2.29,16.05a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1H7.24A1,1,0,0,0,8,21.71L18.87,10.78h0L21.71,8a1.19,1.19,0,0,0,.22-.33,1,1,0,0,0,0-.24.7.7,0,0,0,0-.14ZM6.83,20H4V17.17l9.93-9.93,2.83,2.83ZM18.17,8.66,15.34,5.83l1.42-1.41,2.82,2.82Z"/></svg>
                                    </a>
                                    <a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end users -->

        <!-- paginator -->
        <div class="col-12">
            <div class="paginator">
                <span class="paginator__pages">10 from 3 702</span>

                <ul class="paginator__paginator">
                    <li>
                        <a href="#">
                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>
                        <a href="#">
                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end paginator -->
    </div>
</div>
@endsection
