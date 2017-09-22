@extends('layouts.app')

@section('stylesheets')
    <style>
        .list-group-item-action {
            text-align: left;
        }
        .task_done{
            text-decoration:line-through;
            font-weight: 100 !important;
        }
        .check_done{
            margin-right: 15px;
            margin-left: 10px;
        }
        .task_name{
            font-weight: bold;
        }
    </style>
@endsection

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
                <a href="#" class="check_done list-group-item list-group-item-action" rel="{{ $task->id }}" is_done="{{ $task->is_done }}">
                    <span class="task_name @if ($task->is_done == 1) task_done @endif" rel="{{ $task->id }}">{{ $task->name }}</span>
                    <!--<button class="btn btn-default" id="edit_task">Edit</button>-->
                </a>
            @endforeach
                {{ csrf_field() }}
        </div>
    </div>
    <div class="card-footer text-muted primary-color white-text">
        <p class="mb-0">
            Total de {{ count($tasks) }} tâche(s) dont <span id="nb_tasks_non_done">{{ $nb_tasks_non_done }}</span> non terminée(s)
        </p>
    </div>
</div>
@endsection

@section('javascripts')
<script>
    $(document).on('click', '.check_done', function(e){
        e.preventDefault();
        var task_id = $(this).attr('rel');
        var is_done = $(this).attr('is_done');
        if(is_done == 0){
            var done = 1;
        }else{
            var done = 0;
        }
        $.ajax({
            method: "POST",
            url: "{{ route('done_task') }}",
            data: { task_id: task_id, is_done: done, _token : $('input[name="_token"]').val() }
        })
            .done(function( data ) {
                if(done == 1){
                    $('.task_name[rel="'+task_id+'"]').addClass('task_done');
                    $('#nb_tasks_non_done').html(parseInt($('#nb_tasks_non_done').text()) - 1);
                }else{
                    $('.task_name[rel="'+task_id+'"]').removeClass('task_done');
                    $('#nb_tasks_non_done').html(parseInt($('#nb_tasks_non_done').text()) + 1);
                }
                $('.check_done[rel="'+task_id+'"]').attr('is_done', done);
            });
    });

    $(document).on('click', '#edit_task', function(){
        document.location.href = "{{ route('edit_task') }}";
    });
</script>
@endsection