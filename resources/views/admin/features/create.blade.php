@extends('admin.master')
@section('title', __('keywords.add_new_feature'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.add_new_feature') }}</h2>
    </div>
    <form action={{route('admin.feature.store')}} method="post" enctype="multipart/form-data">
    <div class="row">
            @csrf
        <!-- simple table -->
        <div class="col-md-12 my-">      
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-form-label field='title'></x-form-label>
                                <input type="text" id="title" name="title" class="form-control"
                                    placeholder="{{ __('keywords.title') }}"   value="{{ old('title') }}">
                            </div>
                           <x-validation-error field="title"></x-validation-error>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3 ">
                                <x-form-label field='icon'></x-form-label>
                                <input type="text" id="icon" name="icon" class="form-control"
                                    placeholder="{{ __('keywords.icon') }}"   value="{{ old('icon') }}">
                            </div>
                        <x-validation-error field="icon"></x-validation-error>
                        </div>
                        <div class="col-md-12">
                            <x-form-label field='description'></x-form-label>
                            <textarea name="description" class="form-control" id="description" placeholder="{{ __('keywords.description') }}"   value="{{ old('description') }}"></textarea>
                            <x-validation-error field="description"></x-validation-error>
                        </div>
                        <div class="col-md-12 mt-3">
                        <x-submit-button></x-submit-button>
                        </div>
                    </div>
                </div>
            </div> <!-- simple table -->
        </form>
        @endsection
