@extends('layouts.home')

@section('title')
    AYD Sehat | Program Detail
@endsection

@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <!-- Header content -->
    </div>

    <section class="container w-75">
        <header>
            <h1 class="w-75 text-start">{{ $program->title }}</h1>
            <p class="w-75 text-start">{!! $program->description !!}</p>
        </header>

        <div class="content">
            <h3 class="mt-4">Tujuan Program</h3>
            <blockquote class="blockquote p-3 rounded">
                <p>{!! $program->program_objective !!}</p>
            </blockquote>
        </div>

        <!-- Bagian yang perlu diperbarui di view blade -->
        <div class="row gallery mt-4" id="photo-gallery">
            <h3 class="mt-4">Documentation Program</h3>
            @foreach ($photos as $photo)
                <div class="col-md-4 mb-4">
                    <figure class="text-center">
                        <img class="img-fluid img-thumbnail" src="{{ Storage::url($photo) }}" alt="Program Image">
                    </figure>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $photos->links() }}
        </div>

    </section>
@endsection
