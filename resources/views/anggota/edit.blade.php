@extends('layout.main')
@extends('layouts.app')

@section('title', 'SiPerpus')

@section('konten')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Ubah Data Anggota</h1>
            <hr class="my-4">

             <form action="/anggota/update" method="post"> <!--/update-->
                @csrf
                <div class="form-group">
                     <label for="nama">Nama Anggota</label>
                     <input type="text" class="form-control" id="nama" name="nama_anggota" placeholder="Nama Anggota" value="{{$data->nama_anggota}}">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Anggota" value="{{$data->alamat}}">   
                </div>    
    
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        @if($data->jenis_kelamin == 'L' )
                        <option value="L" selected>Laki-laki</option>
                        <option value="P">Perempuan</option>
                        @else
                        <option value="L">Laki-laki</option>
                        <option value="P"  selected>Perempuan</option>
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{$data->email}}"> 
                </div>
    
                <div class="form-group">
                    <label for="no_telp">No. HP</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="NO. HP" value="{{$data->no_telp}}">
                </div>
                <button type="submit" value="Update" class="btn btn-primary">Simpan</button>
             </form>    
        </div>
    </div>
@endsection