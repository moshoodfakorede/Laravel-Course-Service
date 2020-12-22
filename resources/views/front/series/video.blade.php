@extends('layouts.app')

@section('content')
    <b-container>
        <section>
            <h2>Video Player</h2>
            {{-- <b-jumbotron>
                <template v-slot:header>{{ $video->title }}</template>
                <template v-slot:lead>{{ $video->description }}</template>

                <hr class="my-4">

                <b-button variant="primary" href="#">Start Series</b-button>
                <b-button variant="success" href="#">Subscribe</b-button>
            </b-jumbotron> --}}
        </section>

        <section class="mb-5 pt-5 text-center">
            <a href="#" class="text-decoration-none" style="color:black;">
                <b-card class="mb-2" no-body class="overflow-hidden">
                    <b-row no-gutters>
                        <b-col>
                            <h3 class="pt-3"><strong>About this Episode</strong></h3>
                            <b-card-body title="{{ $video->title }}">
                                <b-card-text>
                                    {{$video->description }}
                                </b-card-text>
                            </b-card-body>
                        </b-col>
                    </b-row>
                </b-card>
            </a>
        </section>

        <section class="mb-5">
            <h3 class="mb-3 text-center">Episodes</h3>
            <episodes :videos="{{ $series->videos }}"></episodes>
        </section>
    </b-container>
@endsection