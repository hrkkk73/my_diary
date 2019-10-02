@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">日記編集</h2>
<form >
  <div class="form-group">
    <input type="text" class="form-control" placeholder="ToDo内容">
  </div>
  <button type="submit" class="btn btn-success float-right">更新</button>
</form>

@endsection