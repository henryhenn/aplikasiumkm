@extends('layouts.main')

@section('content')
    <div class="row mt-3">
        <div class="col">
            <p>Home &nbsp;/ Pelayanan &nbsp;/ <span class="font-weight-bold">Pelayanan Details</span></p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <img src="https://source.unsplash.com/random/700x400" alt="">
        </div>
        <div class="col-lg-8 col-sm-12">
            <h3 class="font-weight-bold mt-2">Konsultasi Bisnis</h3>
            <small class="text-secondary text-uppercase">Disperindagkop UKM</small>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores minus placeat eveniet
                temporibus, molestiae facilis neque saepe natus maxime. Totam!</p>
            <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta accusantium sed nulla
                voluptates facere, voluptatibus quam accusamus doloribus odit sunt necessitatibus, quas a, dicta laudantium
                iste repellat. Sequi, esse similique?</p>
            <a href="{{ url('pelayanan/konsultasi-bisnis/daftar') }}" class="btn btn-success mt-4"
                style="width: 100px;">Daftar</a>
        </div>
    </div>
@endsection
