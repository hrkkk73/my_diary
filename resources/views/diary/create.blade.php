@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">日記作成</h2>
{!! Form::open(['route' => 'diary.store']) !!}
  <div class="form-group">
    {!! Form::input('date', 'writing_time', ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="日記内容">
  </div>
  <div class="">
        {!! Form::textarea('contents', null, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
  </div>
  <button type="submit" class="btn btn-success float-right">追加</button>
{!! Form::close() !!}

@endsection