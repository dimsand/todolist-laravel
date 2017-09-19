@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Ajout d'une tâche</h2>
            <form method="POST" action="{{ route('add_task_form') }}">
                {{ csrf_field() }}
                <div class="md-form">
                    <input type="text" id="name" class="form-control" name="name" required>
                    <label for="name">Name</label>
                </div>
                <div class="md-form">
                    <textarea type="text" id="description" class="md-textarea" name="description" style="height: 100px"
                              required></textarea>
                    <label for="description">Description</label>
                </div>
                <div class="md-form">
                    <input type="text" id="form3" class="form-control" name="due_date" required>
                    <label for="due_date">Pour le</label>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-unique" value="Enregistrer">
                </div>
            </form>
        </div>
    </div>
@endsection
