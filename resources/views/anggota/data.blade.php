@extends('main')

@section('title','ANGGOTA')

@section('layoutSidenav_content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            
            <h1 class="mt-4 px-2">Dasboard</h1>
            <div class="row mb-2 px-2 mb-3 ">
                   <div class="card-header">
                    <ol class="breadcrumb mb-1 px-2">
                        <li class="breadcrumb-item active" style="color: black;">
                            Dasboard
                            {{-- <li><a href="{{url('home')}}" style="text-decoration: none;color:black" >Dasboard</a></li> --}}
                        </li>
                    </ol>
                   </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-secondary text-white mb-4">
                        <div class="card-body">Data Peminjaman<span class="float-end">{{$cpinjam}}</span></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('pinjam')}}" style="text-decoration: none;">Lihat</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body">Data Buku<span class="float-end">{{$cbuku}}</span></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" style="text-decoration: none;" href="/buku">Lihat</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Data Pengembalian<span class="float-end">{{$ckembali}}</span></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" style="text-decoration: none;" href="{{url('kembali')}}">Lihat</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fa fa-calendar">    
                    </i>
                    Data Anggota
                    <a href="{{ url('add') }}" class="btn float-end">
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
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No TLP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                            @foreach ($tbanggota as $item)
                            <tbody>
                                <tr>
                                    <td>{{$item->id_anggota}}</td>
                                    <td>{{$item->nama_anggota}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->no_tlp}}</td>
                                    <td><a href="{{url('edit/'.$item->id_anggota)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <form action="{{url('/'.$item->id_anggota)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Apakah Anda Yakin')">
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
                    {{$tbanggota->links()}}
                </div>
            </div>
        </div>
    </main>
</div>
@endsection