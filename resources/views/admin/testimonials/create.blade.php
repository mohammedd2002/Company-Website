@extends('admin.master')
@section('title', __('keywords.add_new_testimonial'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.add_new_testimonial') }}</h2>
    </div>
    <form action={{route('admin.testimonial.store')}} method="post" enctype="multipart/form-data">
    <div class="row">
            @csrf
        <!-- simple table -->
        <div class="col-md-12 my-">      
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-form-label field='name'></x-form-label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="{{ __('keywords.name') }}"   value="{{ old('name') }}">
                            </div>
                           <x-validation-error field="name"></x-validation-error>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3 ">
                                <x-form-label field='position'></x-form-label>
                                <input type="text" id="position" name="position" class="form-control"
                                    placeholder="{{ __('keywords.position') }}"   value="{{ old('position') }}">
                            </div>
                        <x-validation-error field="position"></x-validation-error>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3 ">
                                <x-form-label field='image'></x-form-label>
                                <input type="file" id="image" name="image" class="form-control-file">
                            </div>
                        <x-validation-error field="image"></x-validation-error>
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
