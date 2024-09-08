@extends('admin.master')
@section('title', __('keywords.edit_member'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.edit_member') }}</h2>
    </div>
    <form action={{ route('admin.member.update', ['member' => $member]) }} method="post" enctype="multipart/form-data">
        <div class="row">
            @method('put')
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
                                        placeholder="{{ __('keywords.name') }}" value="{{ $member->name }}">
                                </div>
                                <x-validation-error field="name"></x-validation-error>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3 ">
                                    <x-form-label field='position'></x-form-label>
                                    <input type="text" id="position" name="position" class="form-control"
                                        placeholder="{{ __('keywords.position') }}" value="{{ $member->position }}">
                                </div>
                                <x-validation-error field="position"></x-validation-error>
                            </div>


                            <div class="col-md-4">
                                <label for="facebook">{{ __('keywords.facebook') }}</label>
                                <input type="url" class="form-control" value="{{ $member->facebook }}">
                                <x-validation-error field="facebook"></x-validation-error>
                            </div>

                            <div class="col-md-4">
                                <label for="twitter">{{ __('keywords.twitter') }}</label>
                                <input type="url" class="form-control" value="{{ $member->twitter }}">
                                <x-validation-error field="twitter"></x-validation-error>
                            </div>

                            <div class="col-md-4">
                                <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                                <input type="url" class="form-control" value="{{ $member->linkedin }}">
                                <x-validation-error field="linkedin"></x-validation-error>
                            </div>

                            <div class="col-md-12 mt-2">
                                <div class="form-group mb-3 ">
                                    <x-form-label field='image'></x-form-label>
                                    <input type="file" id="image" name="image" class="form-control-file">
                                </div>
                                <x-validation-error field="image"></x-validation-error>
                            </div>

                            <div class="col-md-12 mt-3">

                                <x-submit-button></x-submit-button>

                            </div>
                        </div>
                    </div>
                </div> <!-- simple table -->
    </form>
@endsection
