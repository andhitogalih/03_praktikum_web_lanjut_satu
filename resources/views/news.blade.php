@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="-body">
                <h1>News {{ $page }}</h1>
                <ul>
                    <li><a href="https://www.educastudio.com/news">News 1</a></li>
                </ul>
                <ul>
                    <li><a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">News 2</a></li>
                </ul> 
            </div>
        </div>
    </div>
</div>
@endsection