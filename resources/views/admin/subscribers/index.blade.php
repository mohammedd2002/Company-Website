@extends('admin.master')
@section('title', __('keywords.subscribers'))
@section('content')
    <div class="d-flex justify-content-between align-items-center ">
        <h2 class="h5 page-title">{{__('keywords.subscribers')}}</h2>
    
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
                                <th >{{ __('keywords.email') }}</th>
                                <th >{{ __('keywords.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($subscribers) > 0)
                                @foreach ($subscribers as $subscriber)
                                    <tr>
                                        <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                        <td>{{ $subscriber->email }}</td>                     
                                        <td>
                            
                                            <x-delete-button action="{{route('admin.subscriber.destroy',['subscriber'=>$subscriber])}}"></x-delete-button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                    <x-empty-alert></x-empty-alert>
                            @endif

                        </tbody>
                    </table>
                    {{ $subscribers->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div> <!-- simple table -->
    @endsection
