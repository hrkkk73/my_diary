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
      <th></th>
    </tr>
  </thead>
  <tbody>

      <tr>
        <td class="align-middle">2019/10/02</td>
        <td class="align-middle">今日の日記</td>
        <td class="align-middle">テスト</td>
        <td class="col-xs-2"><a class="btn" href=""><i class="fa fa-book"></i></a></td>
      </tr>

  </tbody>
</table>

@endsection