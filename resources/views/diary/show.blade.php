@extends ('layouts.app')
@section ('content')

<h1 class="page-header">日記詳細</h1>
<div class="main-wrap">
  <div class="panel panel-success">
    <div class="panel-heading">
      {{ $diaries->writing_time }}&nbsp;&nbsp;の日記
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <tbody>
          <tr>
            <th class="table-column">Title</th>
            <td class="td-text">{{ $diaries->title }}</td>
          </tr>
          <tr>
            <th class="table-column">Content</th>
            <td class='td-text'>{!! nl2br(e($diaries->contents)) !!}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="btn-bottom-wrapper">
    <a class="btn btn-edit" href="{{ route('diary.edit', $diaries->id) }}"><i class="fas fa-pencil-alt"></i></i></a>
    <div class="btn-delete">
      {!! Form::open(['route' => ['diary.user.delete', $diaries->id], 'method' => 'DELETE']) !!}
        <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></i></button>
      {!! Form::close() !!}
    </div>
  </div>
</div>

@endsection