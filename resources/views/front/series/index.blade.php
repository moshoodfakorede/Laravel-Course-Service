@extends('layouts.app')

@section('content')
    <b-container>
        <section class="mb-5">
            <div>
                <b-row>
                   @foreach ($series as $s)
                       <b-col cols="4">
                            <b-card
                              title="{{ $s->title }}" 
                              class="text-center" 
                              img-src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPOs4jT_cgp2si_Jeaz7glQ-l5zJ9PpjQSj4WjG3vMW-1jtCe3"
                            >
                                <b-card-text>
                                    {{ Str::words($s->description, 10) }}
                                </b-card-text>
                                <template v-slot:footer>
                                    <b-button href="{{ route('series.show', $s) }}" variant="primary">Play</b-button>
                                </template>
                            </b-card>
                       </b-col>
                   @endforeach
                </b-row>
            </div>
        </section>

        <section>
            <pricing></pricing>
        </section>

        <div id="page-content">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h1 class="font-weight-light mt-4 text-white">Stick Footer using Flexbox</h1>
                        <p class="lead text-white-50">Use just two Bootstrap 4 utility classes and three custom CSS rules</p>
                    </div>
                </div>
            </div>
        </div>
        
    </b-container>
@endsection