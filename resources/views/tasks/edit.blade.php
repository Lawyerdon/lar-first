@extends('layouts.app')

@section('content')

    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой задачи -->
        <form action="{{ route('tasks.store',$task->id) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        {{ method_field('GET')}}

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Редактировать задачу</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task" class="form-control" value="{{$task->name}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Обновить задачу
                    </button>
                </div>
            </div>
        </form>
{{--        <form action="{{ route('tasks.update',$task->id) }}" method="POST" class="form-horizontal">--}}
{{--            {{ csrf_field() }}--}}
{{--            {{ method_field('GET')}}--}}
{{--        </form>--}}
    </div>
@endsection


