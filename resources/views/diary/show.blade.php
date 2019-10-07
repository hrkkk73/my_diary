@extends ('layouts.app')
@section ('content')

<h1 class="page-header">日記詳細</h1>
<div class="main-wrap">
  <div class="container">
    {!! Form::input('hidden', 'user_id', Auth::id(), ['class' => 'form-control']) !!}
      <div class="form-group">
        {!! Form::input('text', 'writing_time', $diaries->writing_time->format('Y年m月d日'), ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::input('text', 'title', $diaries->title, ['class' => 'form-control', 'placeholder' => '日記内容']) !!}
      </div>
      <div class="form-group">
        {!! Form::textarea('contents', $diaries->contents, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
      </div>
      <div class="form-inline float-right">
        <a class="mr-2 btn btn-success" href="{{ route('diary.edit', $diaries->id) }}">編集</a>
        <div class="btn-delete">
          {!! Form::open(['route' => ['diary.user.delete', $diaries->id], 'method' => 'DELETE']) !!}
            <button class="btn btn-danger" type="submit">削除</button>
          {!! Form::close() !!}
        </div>
      </div>
  </div>
</div>

@endsection