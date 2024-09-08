@extends('admin.master')
@section('title', __('keywords.companies'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.companies') }}</h2>
        {{-- add new --}}
        <x-action-button href="{{ route('admin.company.create') }}" type="create"></x-action-button>
    </div>
    <div class="row">
        <!-- simple table -->
        <div class="col-md-12 my-4">
            <x-success-alert></x-success-alert>

            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 30%">#</th>
                                <th width="30%">{{ __('keywords.image') }}</th>
                                <th width="15%">{{ __('keywords.action') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if (count($companies) > 0)
                                @foreach ($companies as $company)
                                
                                    <tr>
                                        <td>{{ $companies->firstItem() + $loop->index }}</td>
                                        <td>
                                            <img width="50px" src="{{ asset("storage/companies/$company->image") }}">
                                        </td>
                                        <td>
                                            {{-- edit --}}
                                            <x-action-button
                                                href="{{ route('admin.company.edit', ['company' => $company]) }}"
                                                type="edit"></x-action-button>
                                            <x-delete-button
                                                action="{{ route('admin.company.destroy', ['company' => $company]) }}"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <x-empty-alert></x-empty-alert>
                            @endif

                        </tbody>
                    </table>
                    {{ $companies->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div> <!-- simple table -->
    @endsection
