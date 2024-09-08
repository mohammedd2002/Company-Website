@extends('admin.master')
@section('title', __('keywords.features'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{__('keywords.features')}}</h2>
        {{-- add new --}}
        <x-action-button href="{{route('admin.feature.create')}}" type="create"></x-action-button>
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
                                <th>{{ __('keywords.title') }}</th>
                                <th width="15%">{{ __('keywords.icon') }}</th>
                                <th width="15%">{{ __('keywords.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($features) > 0)
                                @foreach ($features as $feature)
                                    <tr>
                                        <td>{{ $features->firstItem() + $loop->index }}</td>
                                        <td>{{ $feature->title }}</td>
                                        <td>{{ $feature->icon }}</td>
                                        {{-- <td><i class="fe {{ $feature->icon }} fa-2x"></i></td> --}}
                                        <td>
                                             {{-- show --}}
                                             <x-action-button href="{{ route('admin.feature.show', ['feature' => $feature]) }}"
                                                type="show"></x-action-button>
                                                {{-- edit --}}
                                            <x-action-button href="{{ route('admin.feature.edit', ['feature' => $feature]) }}"
                                                type="edit"></x-action-button>

                                
                                            <x-delete-button action="{{route('admin.feature.destroy',['feature'=>$feature])}}"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                    <x-empty-alert></x-empty-alert>
                            @endif

                        </tbody>
                    </table>
                    {{ $features->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div> <!-- simple table -->
    @endsection
