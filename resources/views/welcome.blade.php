@extends('layouts.app')

@section('content')
    <div class="card card-cascade wider reverse my-4">

        <!--Card image-->
        <div class="view overlay hm-white-slight">
            <img src="{{URL::asset('/img/todolist-welcome.jpg')}}" class="img-fluid" style="height: 550px; width: 100%;">
            <a href="#!">
                <div class="mask waves-effect waves-light"></div>
            </a>
        </div>
        <!--/Card image-->

        <!--Card content-->
        <div class="card-body text-center">
            <!--Title-->
            <h4 class="card-title"><strong>Task Manager</strong></h4>
            <h5 class="indigo-text"><strong>Gérer vos tâches</strong></h5>

            <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
            </p>

            <a href="{{ route('tasks') }}" class="btn btn-primary active btn-lg" role="button" aria-pressed="true">Commencer</a>

        </div>
        <!--/.Card content-->

    </div>
@endsection
