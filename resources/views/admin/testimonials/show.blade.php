@extends('admin.master')
@section('title', __('keywords.show_testimonial'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.show_testimonial') }}</h2>
    </div>
    <div class="row">
        <!-- simple table -->
        <div class="col-md-12 my-">      
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="name">{{ __('keywords.name') }}</label>
                                <p class="form-control">{{$testimonial->name}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="position">{{ __('keywords.position') }}</label>
                            <div class="form-group mb-3 ">
                                <p class="form-control">{{$testimonial->position}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="image">{{ __('keywords.image') }}</label>
                            <div class="form-group mb-3 mt-1 ">
                                <img width="40px" src="{{asset("storage/testimonials/$testimonial->image")}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="description">{{ __('keywords.description') }}</label>
                         <text class="form-control">{{$testimonial->description}}</text>
                        </div>
                    </div>
                </div>
            </div> <!-- simple table -->
        @endsection
