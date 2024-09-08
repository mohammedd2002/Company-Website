@extends('admin.master')
@section('title', __('keywords.messages'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{__('keywords.messages')}}</h2>
        {{-- add new --}}
        {{-- <x-action-button href="{{route('admin.message.create')}}" type="create"></x-action-button> --}}
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
                                <th >{{ __('keywords.email') }}</th>
                                <th >{{ __('keywords.subject') }}</th>
                            
                                <th >{{ __('keywords.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($messages) > 0)
                                @foreach ($messages as $message)
                                    <tr>
                                        <td>{{ $messages->firstItem() + $loop->index }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->subject }}</td>
                                      
                              
                                        <td>
                                             {{-- show --}}
                                             <x-action-button href="{{ route('admin.message.show', ['message' => $message]) }}"
                                                type="show"></x-action-button>
                                                {{-- edit --}}
                                       

                                
                                            <x-delete-button action="{{route('admin.message.destroy',['message'=>$message])}}"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                    <x-empty-alert></x-empty-alert>
                            @endif

                        </tbody>
                    </table>
                    {{ $messages->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div> <!-- simple table -->
    @endsection
