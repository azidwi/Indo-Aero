@extends('layouts.app')
@section('content')


<section class="hero">
    <div class="hero-content">
        <h1>Aircraft Part Catalog</h1>
        <p>Find aircraft parts quickly by part number.</p>
    </div>
</section>
<div class="search-box">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input
        id="searchInput"
        type="text"
        name="search"
        placeholder="Search Part Number..."
        value="{{ request('search') }}">
</div>
<section id="parts" class="parts-grid">
    @foreach($parts as $part)
    <div
        class="part-card"
        data-number="{{ $part->part_number }}"
        data-description="{{ $part->description }}">
        <small>PART NUMBER</small>
        <h3>{{ $part->part_number }}</h3>
        <small>DESCRIPTION</small>
        <p>{{ $part->description }}</p>
        <span class="detail-btn">
            View Detail →
        </span>
    </div>
    @endforeach
</section>
<div class="floating-pagination">
    {{-- Previous --}}
    @if($parts->onFirstPage())
        <span class="nav-btn disabled">‹</span>
    @else
        <a href="{{ $parts->previousPageUrl() }}" class="nav-btn">‹</a>
    @endif
    <div class="page-group">
        @php
            $current = $parts->currentPage();
            $last = $parts->lastPage();
        @endphp
        {{-- Halaman pertama --}}
        <a href="{{ $parts->url(1) }}"
            class="{{ $current == 1 ? 'active' : '' }}">
            1
        </a>
        {{-- Titik tiga kiri --}}
        @if($current > 3)
            <span>...</span>
        @endif
        {{-- Halaman tengah --}}
        @for($i = max(2, $current - 1); $i <= min($last - 1, $current + 1); $i++)
            <a
                href="{{ $parts->url($i) }}"
                class="{{ $current == $i ? 'active' : '' }}">
                {{ $i }}
            </a>
        @endfor
        {{-- Titik tiga kanan --}}
        @if($current < $last - 2)
            <span>...</span>
        @endif
        {{-- Halaman terakhir --}}
        @if($last > 1)
            <a
                href="{{ $parts->url($last) }}"
                class="{{ $current == $last ? 'active' : '' }}">
                {{ $last }}
            </a>
        @endif
    </div>
    {{-- Next --}}
    @if($parts->hasMorePages())
        <a href="{{ $parts->nextPageUrl() }}" class="nav-btn">›</a>
    @else
        <span class="nav-btn disabled">›</span>
    @endif
</div>
<div id="modal" class="modal">
    <div class="modal-content">
        <img
            src="{{ asset('images/logo.png') }}"
            class="modal-logo">
        <span class="close">&times;</span>
        <small>PART NUMBER</small>
        <h2 id="modalPart"></h2>
        <small>DESCRIPTION</small>
        <p id="modalDesc"></p>
        <hr>
        <p class="contact-text">
            Need more information? Contact us using the details below.
        </p>
        <h3>PT Indo Aero Semesta</h3>
        <p>📞 +62 21 5456557</p>
        <p>✉ marketing@indoaerosemesta.com</p>
        <p>📍 Jl. Peta Barat No.88F, Kalideres, Jakarta Barat</p>
        <button class="close-btn">
            Close
        </button>
    </div>
</div>

<footer>
    © {{ date('Y') }} PT Indo Aero Semesta
</footer>
@endsection