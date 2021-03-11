@extends('layouts.blogs')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        @foreach($datos as $dato)
                            <p style="margin-bottom: 40px">
                                <ul> Informacion del Post:
                                    <li>{{$dato->id}}</li>
                                    <li>{{$dato->title}}</li>
                                    <li>{{$dato->slug}}</li>
                                    <li>{{$dato->content}}</li>
                                    <li>{{$dato->created_at}}</li>
                                </ul>
                            </p>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
