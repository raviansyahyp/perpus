@extends('layout.main')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!----------------------------------------------------------->  
                <div class="jumbotron">

                    @section('konten')

                    <div class="jumbotron">
                        <h1 class="display-4">Selamat Datang!</h1>
                        <p class="lead">Ini adalah sistem informasi perpustakaan, "Semoga Harimu Penuh Dengan Ilmu Pengetahuan"</p>    
                        <hr class="my-4">
                    </div>
                </div>
                <!----------------------------------------------------------->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
