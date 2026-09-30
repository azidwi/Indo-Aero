@extends('layouts.app')
@section('content')

<div class="detail">
    <h1>{{ $part->part_number }}</h1>
    <h3>{{ $part->description }}</h3>
    <hr>
    <h2>PT Indo Aero Semesta</h2>
    <p>📍 Jl. Peta Barat No.88F, Kalideres, Jakarta Barat</p>
    <p>✉ marketing@indoaerosemesta.com</p>
    <p>📞 +62 21 5456557</p>
    <a href="/">← Back</a>
    <a
        class="detail-btn"
        data-number="{{ $part->$part_number }}"
        data-description="{{ $part->description}}"
        >
        View Detail-> 
    </a>
</div>

@endsection