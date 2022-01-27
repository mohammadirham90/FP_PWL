@extends('main')

@section('title','BUKU')

@section('layoutSidenav_content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 px-2">Buku</h1>
            <div class="row row-cols-2 mb-2 px-2 mb-3 ">
                <div class="card-header">
                    <ol class="breadcrumb mb-1 px-2">
                        <li class="breadcrumb-item">
                            <li><a href="{{url('/')}}" style="text-decoration: none;color:black" >Dasboard</a></li>
                        </li>
                        <li class="breadcrum-item active ms-2 me-2">/</li>
                        <li class="breadcrumb-item"><a href="{{url('buku')}}" style="text-decoration: none;color:black" >Data Buku</a></li>
                        <li class="breadcrum-item active ms-2 me-2">/</li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
                    
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa fa-calendar">    
                    </i>
                    Tambah Buku
                </div>
                <div class="card-body">
                    <form action="{{url('buku')}}" method="POST">
                        @csrf
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputNM" class="px-1">Kode Buku</label>
                            <input type="text" class="form-control" name="kd_buku" id="inputNM"required>
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputNM" class="px-1">Judul Buku</label>
                            <input type="text" class="form-control" name="jdl_buku" id="inputNM"required>
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputALMT" class="px-1">Tahun Terbit</label>
                            <input type="text" class="form-control" name="thn_terbit" id="inputALMT" required>
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputTLP" class="px-1">Penerbit</label>
                            <input type="text" class="form-control " name="penerbit" id="inputTLP"required>
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputTLP" class="px-1">stok</label>
                            <input type="text" class="form-control " name="stok" id="inputTLP"required>
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