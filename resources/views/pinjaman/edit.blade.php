@extends('main')

@section('title','Anggota')

@section('layoutSidenav_content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 px-2">Anggota</h1>
            <div class="row mb-2 px-2 mb-3 ">
                <div class="card-header">
                    <ol class="breadcrumb mb-1 px-2">
                        <li class="breadcrumb-item">
                            <li><a href="{{url('/')}}" style="text-decoration: none;color:black" >Dasboard</a></li>
                        </li>
                        <li class="breadcrum-item active ms-2 me-2">/</li>
                        <li class="breadcrumb-item "><a href="{{url('pinjam')}}" style="text-decoration: none;color:black" >Data Pinjaman</a></li>
                        <li class="breadcrum-item active ms-2 me-2">/</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>

                </div>
                    <ol class="breadcrumb mb-1 px-2">
                        <li class="breadcrumb-item">
                            <li><a href="{{url('/')}}" style="text-decoration: none;color:black" >Dasboard</a></li>
                        </li>
                        <li class="breadcrum-item active ms-2 me-2">/</li>
                        <li class="breadcrumb-item "><a href="{{url('pinjam')}}" style="text-decoration: none;color:black" >Data Pinjaman</a></li>
                        <li class="breadcrum-item active ms-2 me-2">/</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa fa-calendar">    
                    </i>
                    Update Data Anggota
                </div>
                <div class="card-body">
                    <form action="{{action('App\Http\Controllers\PinjamController@update',@id)}}" method="POST">
                        @csrf
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputALMT" class="px-1">Tanggal Pinjam</label>
                            <input type="date" class="form-control" name="tanggal_pinjam" id="inputALMT" value="{{$pinjaman->tanggal_pinjam}}">
                            @error('nama_anggota')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputALMT" class="px-1">Tanggal Kembali</label>
                            <input type="date" class="form-control @error('alamat') is-invalid @enderror" name="tangga_kembali" id="inputALMT" value="{{$pinjaman->tangga_kembali}}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputBuku" class="px-1">Nama Buku</label>
                            <select name="id_buku" id="inputBuku" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($data_buku as $item)
                                <option value="{{$item->id_buku}}"{{old('id_buku',$pinjaman->id_buku) == $item->id_buku? 'selected' : null}}>{{ $item->judul_buku }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputAnggota" class="px-1">Nama Anggota</label>
                            <select name="id_anggota" id="inputAnggota" class="form-control">
                                <option>- Pilih -</option>
                                @foreach ($data_anggota as $item)
                                <option value="{{$item->id_anggota}}"{{old('id_buku',$pinjaman->id_anggota) == $item->id_anggota? 'selected' : null}}>{{ $item->nama_anggota }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                        {{ method_field('PUT')}}
                        <div class="form-group mb3">
                            <a href="" for="btn-submit">
                                <input type="submit" class="btn btn-warning"name="submit" id="btn-submit" value="Update">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection