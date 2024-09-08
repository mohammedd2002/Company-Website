@extends('admin.master')
@section('title', __('keywords.edit_setting'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.edit_setting') }}</h2>
    </div>
    <x-success-alert></x-success-alert>
    <form action={{ route('admin.setting.update', ['setting' => $setting]) }} method="post" enctype="multipart/form-data">
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
                                    <x-form-label field='phone'></x-form-label>
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="{{ __('keywords.phone') }}" value={{ $setting->phone }}>
                                </div>
                                <x-validation-error field="phone"></x-validation-error>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label field='address'></x-form-label>
                                    <input type="text" id="address" name="address" class="form-control"
                                        placeholder="{{ __('keywords.address') }}" value={{ $setting->address }}>
                                </div>
                                <x-validation-error field="address"></x-validation-error>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label field='email'></x-form-label>
                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="{{ __('keywords.email') }}" value={{ $setting->email }}>
                                </div>
                                <x-validation-error field="email"></x-validation-error>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label field='facebook'></x-form-label>
                                    <input type="url" id="facebook" name="facebook" class="form-control"
                                        placeholder="{{ __('keywords.facebook') }}" value={{ $setting->facebook }}>
                                </div>
                                <x-validation-error field="facebook"></x-validation-error>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label field='twitter'></x-form-label>
                                    <input type="url" id="twitter" name="twitter" class="form-control"
                                        placeholder="{{ __('keywords.twitter') }}" value={{ $setting->twitter }}>
                                </div>
                                <x-validation-error field="twitter"></x-validation-error>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label field='youtube'></x-form-label>
                                    <input type="url" id="youtube" name="youtube" class="form-control"
                                        placeholder="{{ __('keywords.youtube') }}" value={{ $setting->youtube }}>
                                </div>
                                <x-validation-error field="youtube"></x-validation-error>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label field='linkedin'></x-form-label>
                                    <input type="url" id="linkedin" name="linkedin" class="form-control"
                                        placeholder="{{ __('keywords.linkedin') }}" value={{ $setting->linkedin }}>
                                </div>
                                <x-validation-error field="linkedin"></x-validation-error>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label field='instagram'></x-form-label>
                                    <input type="url" id="instagram" name="instagram" class="form-control"
                                        placeholder="{{ __('keywords.instagram') }}" value={{ $setting->instagram }}>
                                </div>
                                <x-validation-error field="instagram"></x-validation-error>
                            </div>

                            <div class="col-md-12 mt-3">

                                <x-submit-button></x-submit-button>

                            </div>
                        </div>
                    </div>
                </div> <!-- simple table -->
    </form>
@endsection
