@extends('layouts.app')

@section('content')



    <h1>タスクの新規作成ページ</h1>
    
    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    
                    {!! Form::label('status', 'タスクの状況：') !!}
                    {!! Form::select('status', ['未完了' => '未完了', '完了' => '完了'], null, ['placeholder' => '選択して下さい']) !!}
                </div>
                
                {!! Form::submit('追加', ['class' => 'btn btn-secondary']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection