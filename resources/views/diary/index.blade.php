@extends ('layouts.app')
@section ('content')

<h1 class="page-header">日記一覧</h1>
<p class="text-right">
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
      <td class="align-middle">{{ $diary->writing_time }}</td>
      <td class="align-middle">{{ $diary->title }}</td>
      <td class="align-middle">{{ $diary->contents }}</td>
      <td class="btn btn-primary"><a class="btn" href="diary/{{ $diary->id }}"><i class="fa fa-book"></i></a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection