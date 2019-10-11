@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">日記編集</h2>
<div class="conteiner">
  <div class="container">
    {!! Form::open(['route' => ['diary.update', $diary->id], 'method' => 'PUT']) !!}
      {!! Form::input('hidden', 'user_id', Auth::id(), ['class' => 'form-control']) !!}
      <div class="form-group @if(!empty($errors->first('writing_time'))) has-error @endif">
        {!! Form::input('date', 'writing_time', $diary->writing_time->format('Y-m-d'), ['class' => 'form-control']) !!}
        <span class="help-block">{{ $errors->first('writing_time') }}</span>
      </div>
      <div class="form-group @if(!empty($errors->first('title'))) has-error @endif">
        {!! Form::input('text', 'title', $diary->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        <span class="help-block">{{ $errors->first('title') }}</span>
      </div>
      <div class="form-group @if(!empty($errors->first('contents'))) has-error @endif">
        {!! Form::textarea('contents', $diary->contents, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
        <span class="help-block">{{ $errors->first('contents') }}</span>
      </div>
      <button type="submit" class="btn btn-success float-right">更新</button>
    {!! Form::close() !!}
  </div>
</div>

@endsection