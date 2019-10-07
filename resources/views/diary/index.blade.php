@extends ('layouts.app')
@section ('content')

<h1 class="page-header">日記一覧</h1>
<div class="main-wrap diary">
  <div class="mr-3 form-inline float-right">
    {!! Form::open(['route' => 'diary.index', 'method' => 'GET']) !!}
      {!! Form::input('month', 'search-month', empty($inputs['search-month']) ? null : $inputs['search-month'], ['class' => 'form-control']) !!}
      <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
    {!! Form::close() !!}
  </div>
    <p class="ml-3 text-left">
      <a class="btn btn-success" href="/diary/create">日記を追加</a>
    </p>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th> Date</th>
        <th>title</th>
        <th>content</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach($diaries as $diary)
      <tr>
        <td class="align-middle">{{ $diary->writing_time->format('Y年m月d日') }}</td>
        <td class="align-middle">{{ mb_strimwidth($diary->title, 0, 80, '...', 'UTF-8') }}</td>
        <td class="align-middle">{{ mb_strimwidth($diary->contents, 0, 80, '...', 'UTF-8') }}</td>
        <td class="btn btn-primary"><a class="btn" href="diary/{{ $diary->id }}">詳細</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection