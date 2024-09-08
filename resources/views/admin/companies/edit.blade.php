@extends('admin.master')
@section('title', __('keywords.edit_company'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.edit_company') }}</h2>
    </div>
    <form action={{ route('admin.company.update', ['company' => $company]) }} method="post" enctype="multipart/form-data">
        <div class="row">
            @method('put')
            @csrf
            <!-- simple table -->
            <div class="col-md-12 my-">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
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
