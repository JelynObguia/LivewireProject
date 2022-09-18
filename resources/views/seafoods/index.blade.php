@extends('base')

@section('content')

<div class="container m-5">
    <div class="row">
        <div class="col-sm-4">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif

                <a href="{{'/logout'}}"><button class="btn btn-primary">
                    Logout
                </button></a>
            <livewire:seafoods.create/>
        </div>
        <div class="col-sm-8">
            <livewire:seafoods.index/>
        </div>
    </div>
</div>

@endsection