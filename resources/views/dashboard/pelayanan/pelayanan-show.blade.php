@extends('layouts.dashboard')

@section('content')
    <div class="row mt-4">
        @foreach ($pelayanan as $pelayanan)
            <div class="card card-border border-dark p-4" style="border-radius: 15px;">
                <div class="d-flex mb-3">
                    @if ($pelayanan->pelayanan->url_foto)
                        <img src="{{ asset('storage/' . $pelayanan->pelayanan->url_foto) }}" class="img-fluid w-75">
                    @else
                        <img src="https://source.unsplash.com/random/400x200" class="img-fluid">
                    @endif
                    <h3 class="text-uppercase ml-4">E-Ticket <span class="d-block">No. UMKM:
                            {{ $pelayanan->id }}</span></h3>
                </div>
                <h3>{{ $pelayanan->jenis }}</h3>
                <div class="d-flex justify-content-between mb-4">
                    <p class="text-danger">{{ auth()->user()->nama_usaha }}</p>
                    <p class="text-danger">{{ $pelayanan->tanggal }}</p>
                    <p class="text-danger">{{ $pelayanan->pelayanan->jenis }}</p>
                    <p class="text-danger">{{ auth()->user()->nama }}</p>
                </div>
                <p>{{ $pelayanan->pelayanan->deskripsi }}</p>
            </div>
        @endforeach
    </div>
@endsection
