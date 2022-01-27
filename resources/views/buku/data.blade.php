@extends('main')

@section('title','BUKU')

@section('layoutSidenav_content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 px-2">Buku</h1>
            <div class="row mb-2 px-2 mb-3 ">
                    <div class="card-header">
                        <ol class="breadcrumb mb-1 px-2">
                            <li class="breadcrumb-item active">
                                <li><a href="{{url('/')}}" style="text-decoration: none;color:black" >Dasboard</a></li>
                            </li>
                            <li class="breadcrum-item active ms-2 me-2">/</li>
                            <li class="breadcrumb-item active">Data Buku</li>
                        </ol>
                    </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa fa-calendar">    
                    </i>
                    Data Buku
                    <a href="{{ url('addbuku') }}" class="btn float-end">
                        <i class="fa fa-user-plus"></i>
                    </a>
                 @if (session('status'))
                    <div class="alert alert-success mt-3 mb-3">
                        {{ session('status') }}
                    </div>
                @endif
                </div>
                <div class="card-body">
                    <table class="table dataTable-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode Buku</th>
                                <th>Judul Buku</th>
                                <th>Tahun Terbit</th>
                                <th>Penerbit</th>
                                <th>Stok</th>
                                <th>Aksi</th>


                            </tr>
                        </thead>
                            @foreach ($tbbuku as $item)
                            <tbody>
                                <tr>
                                    <td>{{$item->id_buku}}</td>
                                    <td>{{$item->kode_buku}}</td>
                                    <td>{{$item->judul_buku}}</td>
                                    <td>{{$item->tahun_terbit}}</td>
                                    <td>{{$item->penerbit}}</td>
                                    <td>{{$item->stok}}</td>
                                    <td><a href="{{url('editbuku/'.$item->id_buku)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <form action="{{url('buku/'.$item->id_buku)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Apakah Anda Yakin')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection