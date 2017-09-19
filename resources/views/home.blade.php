@extends('layouts.app')

@section('content')
<h2>Mes tâches</h2>

<div class="card">
    <div class="card-header primary-color white-text">
        <span style="font-size: 20px; float: left; padding: .4rem 1.6rem;">Todo list</span>
        <a href="{{ route('add_task') }}" class="btn btn-warning active btn-sm" role="button" aria-pressed="true" style="float: right;">Ajouter une tâche</a>
    </div>
    <div class="card-body">
        <div class="list-group">
            @foreach ($tasks as $task)
                <a href="{{ route('edit_task') }}" class="list-group-item list-group-item-action">
                    {{ $task->name }}
                </a>
            @endforeach
        </div>
    </div>
    <div class="card-footer text-muted primary-color white-text">
        <p class="mb-0">{{ count($tasks) }} tâches</p>
    </div>
</div>
@endsection

@section('stylesheets')
    <style>
        .list-group-item-action {
            text-align: left;
        }
    </style>
@endsection