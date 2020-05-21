@extend('layout.admin')

@section('title', '会員管理')

@section('content')
<div class="serch-form">
  <h2>削除確認</h2>
  <form action="" method='post'>
    @csrf
      <p>本当に削除しますか？</p>
    <button><a href="">戻る</a></button>
    <button type='submit'>確認</button>
  </form>

</div>
@endsection
