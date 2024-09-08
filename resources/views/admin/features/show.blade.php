@extends('admin.master')
@section('title', __('keywords.show_feature'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.show_feature') }}</h2>
    </div>
    <div class="row">
        <!-- simple table -->
        <div class="col-md-12 my-">      
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="title">{{ __('keywords.title') }}</label>
                                <p class="form-control">{{$feature->title}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="icon">{{ __('keywords.icon') }}</label>
                            <div class="form-group mb-3 mt-1 ">
                                <i class="fe {{ $feature->icon }} fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-md-12">


                            <label for="description">{{ __('keywords.description') }}</label>
                         <p class="form-control">{{$feature->description}}</p>
                        </div>
                    </div>
                </div>
            </div> <!-- simple table -->
        @endsection
