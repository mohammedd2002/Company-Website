@extends('admin.master')
@section('title', __('keywords.services'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{__('keywords.services')}}</h2>
        {{-- add new --}}
        <x-action-button href="{{route('admin.service.create')}}" type="create"></x-action-button>
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
                            @if (count($services) > 0)
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $services->firstItem() + $loop->index }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ $service->icon }}</td>
                                        {{-- <td><i class="fe {{ $service->icon }} fa-2x"></i></td> --}}
                                        <td>
                                             {{-- show --}}
                                             <x-action-button href="{{ route('admin.service.show', ['service' => $service]) }}"
                                                type="show"></x-action-button>
                                                {{-- edit --}}
                                            <x-action-button href="{{ route('admin.service.edit', ['service' => $service]) }}"
                                                type="edit"></x-action-button>

                                
                                            <x-delete-button action="{{route('admin.service.destroy',['service'=>$service])}}"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                    <x-empty-alert></x-empty-alert>
                            @endif

                        </tbody>
                    </table>
                    {{ $services->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div> <!-- simple table -->
    @endsection
