@extends ('layouts.app')
@section ('content')

<h1 class="page-header">日記詳細</h1>
<div class="main-wrap">
  <div class="container">
      <div class="form-group">Date
        <p>{{ $diaries->writing_time->format('Y年m月d日') }}</p>
      </div>
      <div class="form-group">Title
        <p>{{ $diaries->title }}</p>
      </div>
      <div class="form-group">Content
        <p>{{ $diaries->contents }}</p>
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