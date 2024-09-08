@extends('admin.master')
@section('title', __('keywords.testimonials'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{ __('keywords.testimonials') }}</h2>
        {{-- add new --}}
        <x-action-button href="{{ route('admin.testimonial.create') }}" type="create"></x-action-button>
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
                                <th width="5%">#</th>
                                <th>{{ __('keywords.name') }}</th>
                                <th>{{ __('keywords.position') }}</th>
                                <th>{{ __('keywords.image') }}</th>
                                <th width="15%">{{ __('keywords.action') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if (count($testimonials) > 0)
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $testimonials->firstItem() + $loop->index }}</td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->position }}</td>
                                        <td>
                                            <img width="50px"
                                                src="{{ asset("storage/testimonials/$testimonial->image") }}">
                                        </td>

                                        <td>
                                            {{-- show --}}
                                            <x-action-button
                                                href="{{ route('admin.testimonial.show', ['testimonial' => $testimonial]) }}"
                                                type="show"></x-action-button>
                                            {{-- edit --}}
                                            <x-action-button
                                                href="{{ route('admin.testimonial.edit', ['testimonial' => $testimonial]) }}"
                                                type="edit"></x-action-button>


                                            <x-delete-button
                                                action="{{ route('admin.testimonial.destroy', ['testimonial' => $testimonial]) }}"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <x-empty-alert></x-empty-alert>
                            @endif

                        </tbody>
                    </table>
                    {{ $testimonials->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div> <!-- simple table -->
    @endsection
