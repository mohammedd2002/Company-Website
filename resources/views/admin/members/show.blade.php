@extends('admin.master')
@section('title', __('keywords.show_member'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.show_member') }}</h2>
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
                                <p class="form-control">{{$member->name}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="position">{{ __('keywords.position') }}</label>
                            <div class="form-group mb-3 ">
                                <p class="form-control">{{$member->position}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="image">{{ __('keywords.image') }}</label>
                            <div class="form-group mb-3 mt-1 ">
                                <img width="40px" src="{{asset("storage/members/$member->image")}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="facebook">{{ __('keywords.facebook') }}</label>
                         <text class="form-control">{{$member->facebook}}</text>
                        </div>

                        <div class="col-md-4">
                            <label for="twitter">{{ __('keywords.twitter') }}</label>
                         <text class="form-control">{{$member->twitter}}</text>
                        </div>

                        <div class="col-md-4">
                            <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                         <text class="form-control">{{$member->linkedin}}</text>
                        </div>
                    </div>
                </div>
            </div> <!-- simple table -->
        @endsection
