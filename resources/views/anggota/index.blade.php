@extends('layout.main')
@extends('layouts.app')

@section('title', 'SiPerpus')

@section('konten')
 <div class="container">


    <div class="jumbotron">

        @if(session('msg'))
    
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">    
            {{session('msg')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>    
            </div>

         @endif
    
    
        <h1 class="display-6">Data Anggota</h1>
        <hr class="my-4">     
        <a href="anggota/create" class="btn btn-primary mb-1">Tambah Anggota</a> <!--anggota/create-->       
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($data as $i => $d)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$d->nama_anggota}}</td>
                        <td>{{$d->alamat}}</td>
                        <td>{{$d->jenis_kelamin }}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->no_telp}}</td>
                        <td>
                           <!--<a href="/anggota/edit/{{$d->id_anggota}}" class="badge badge-primary">Edit</a>-->
                           <a href="/hapus/{{$d->id_anggota}}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
    
            </tbody>
        </table>
    </div>
 </div>
@endsection