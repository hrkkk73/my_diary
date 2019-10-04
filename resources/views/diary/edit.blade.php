@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">日記編集</h2>
<div class="main-wrap">
  <div class="container">
    {!! Form::open() !!}
      {!! Form::input('hidden', 'user_id', Auth::id(), ['class' => 'form-control']) !!}
      <div class="form-group">
        {!! Form::input('date', 'writing_time', $diary->writing_time, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::input('text', 'title', $diary->title, ['class' => 'form-control', 'placeholder' => '日記内容']) !!}
        <!-- <input type="text" class="form-control" placeholder="日記内容"> -->
      </div>
      <div class="form-group">
        {!! Form::textarea('contents', $diary->contents, ['class' => 'form-control']) !!}
      </div>
      <button type="submit" class="btn btn-success float-right">更新</button>
    {!! Form::close() !!}
  </div>
</div>

@endsection