@extends('layouts.app')

@section('content')


<div class="container">


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Inventarios</div>

            <div class="card-body">

                @if($errors->any())

                @foreach ($errors->all() as $error)

                <p class="alert alert-danger">{{$error}}</p>
                @endforeach

                @endif
                <form class="form-horizontal"  action="{{$action}}" method="POST">
                    {{ csrf_field() }}

                   @include('forms.item.view.initialdata')
                   @include('forms.item.view.endata')

                </form>

           <div>
            @include('forms.item.view.list')
            </div>
        </div>
    </div>
</div>

</div>

@endsection

