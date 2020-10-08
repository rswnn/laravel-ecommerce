@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-12 mb-5">
        <img src="{{ url('images/ecom.png')}}" class="rounded mx-auto d-block" width="600" alt="">
    </div>
        @foreach($barangs as $barang)
        <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ url('uploads')}}/{{ $barang ->gambar}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$barang ->nama_barang}}</h5>
                <p class="card-text">
                    <strong class="font-weight-bold">Harga :</strong>Rp. {{ number_format($barang->harga)}} <br>
                    <!-- <strong class="font-weight-bold">Stok :</strong> {{ $barang->stok}} <br> -->
                    <hr>
                    <strong class="font-weight-bold">Keterangan :</strong> <br> {{ $barang->deskripsi}}
                </p>
                <a href="{{ url('pesan')}}/{{$barang->id}}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-shopping-cart"></i> Pesan disini</a>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
