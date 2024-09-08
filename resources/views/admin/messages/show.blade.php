@extends('admin.master')
@section('title', __('keywords.show_message'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.show_message') }}</h2>
    </div>
    <div class="row">
        <!-- simple table -->
        <div class="col-md-12 my-">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="title">{{ __('keywords.name') }}</label>
                                <p class="form-control">{{ $message->name }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="title">{{ __('keywords.email') }}</label>
                                <p class="form-control">{{ $message->email }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="title">{{ __('keywords.subject') }}</label>
                                <p class="form-control">{{ $message->subject }}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="title">{{ __('keywords.message') }}</label>
                                <p class="form-control">{{ $message->message }}</p>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div> <!-- simple table -->
        @endsection
