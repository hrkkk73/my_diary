@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">日記作成</h2>
<div class="container">
{!! Form::open(['route' => 'diary.store']) !!}
  {!! Form::input('hidden', 'user_id', Auth::id(), ['class' => 'form-control']) !!}
    <div class="form-group">
      {!! Form::input('date', 'writing_time', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::input('text', 'title', null, ['class' => 'form-control', 'placeholder' => '日記内容']) !!}
    </div>
    <div class="">
          {!! Form::textarea('contents', null, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
    </div>
    <button type="submit" class="btn btn-success float-right">追加</button>
  {!! Form::close() !!}
</div>

@endsection