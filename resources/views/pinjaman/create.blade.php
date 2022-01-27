@extends('main')

@section('title','Anggota')

@section('layoutSidenav_content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 px-2">Peminjaman</h1>
            <div class="row mb-2 px-2 mb-3 ">
                    <div class="card-header">
                        <ol class="breadcrumb mb-1 px-2">
                            <li class="breadcrumb-item">
                                <li><a href="{{url('/')}}" style="text-decoration: none;color:black" >Dasboard</a></li>
                            </li>
                            <li class="breadcrum-item active ms-2 me-2">/</li>
                            <li class="breadcrumb-item "><a href="{{url('pinjam')}}" style="text-decoration: none;color:black" >Data Pinjaman</a></li>
                            <li class="breadcrum-item active ms-2 me-2">/</li>
                            <li class="breadcrumb-item active">Tambah</li>
                        </ol>
                    </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa fa-calendar">    
                    </i>
                    Tambah Pinjaman
                </div>
                <div class="card-body">
                    <form action="{{url('pinjam')}}" method="POST">
                        @csrf
                        
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputALMT" class="px-1">Tanggal Pinjam</label>
                            <input type="date" class="form-control @error('nama_anggota') is-invalid @enderror" autofocus name="tanggal_pinjam" id="inputALMT" value="{{old('tanggal_pinjam')}}">
                            @error('nama_anggota')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputALMT" class="px-1">Tanggal Kembali</label>
                            <input type="date" class="form-control @error('alamat') is-invalid @enderror" name="tangga_kembali" id="inputALMT" value="{{old('tangga_kembali')}}">
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
                                <option value="{{$item->id_buku}}">{{ $item->judul_buku }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputAnggota" class="px-1">Nama Anggota</label>
                            <select name="id_anggota" id="inputAnggota" class="form-control">
                                <option>- Pilih -</option>
                                @foreach ($data_anggota as $item)
                                <option value="{{$item->id_anggota}}">{{ $item->nama_anggota }}</option>
                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb3">
                            <a href="" for="btn-submit">
                                <input type="submit" class="btn btn-warning"name="submit" id="btn-submit" value="Tambah">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection