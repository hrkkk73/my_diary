@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">日記作成</h2>
<div class="container">
{!! Form::open(['route' => 'diary.store']) !!}
  {!! Form::input('hidden', 'user_id', Auth::id(), ['class' => 'form-control']) !!}
    <div class="form-group @if(!empty($errors->first('writing_time'))) has-error @endif">
      {!! Form::input('date', 'writing_time', null, ['class' => 'form-control']) !!}
      <span class="help-block">{{$errors->first('writing_time')}}</span>
    </div>
    <div class="form-group @if(!empty($errors->first('title'))) has-error @endif">
      {!! Form::input('text', 'title', null, ['class' => 'form-control', 'placeholder' => 'title']) !!}
      <span class="help-block">{{$errors->first('title')}}</span>
    </div>
    <div class="form-group @if(!empty($errors->first('contents'))) has-error @endif">
          {!! Form::textarea('contents', null, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
          <span class="help-block">{{$errors->first('contents')}}</span>
    </div>
    <button type="submit" class="btn btn-success float-right">追加</button>
  {!! Form::close() !!}
</div>

@endsection