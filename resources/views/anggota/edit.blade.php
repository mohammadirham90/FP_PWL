@extends('main')

@section('title','Anggota')

@section('layoutSidenav_content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 px-2">Edit Anggota</h1>
            <div class="row row-cols-2 mb-2 px-2 mb-3 ">
                <div class="card-header">
                    <ol class="breadcrumb mb-1 px-2">
                        <li class="breadcrumb-item">
                            <li><a href="{{url('/')}}" style="text-decoration: none;color:black" >Dasboard</a></li>
                        </li>
                        <li class="breadcrum-item active ms-2 me-2">/</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa fa-calendar">    
                    </i>
                    Edit Anggota
                </div>
                <div class="card-body">
                    <form action="{{url('/'.$tbanggota->id_anggota)}}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputNM" class="px-1">Nama</label>
                            <input type="text" class="form-control" value="{{$tbanggota->nama_anggota}}" name="nama" id="inputNM"required>
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputALMT" class="px-1">Alamat</label>
                            <input type="text" class="form-control" value="{{$tbanggota->alamat}}" name="alamat" id="inputALMT" required>
                        </div>
                        <div class="form-group col-xl-3 mb-3">
                            <label for="inputTLP" class="px-1">No Telepon</label>
                            <input type="text" class="form-control " value="{{$tbanggota->no_tlp}}" name="no_tlp" id="inputTLP"required>
                        </div>
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