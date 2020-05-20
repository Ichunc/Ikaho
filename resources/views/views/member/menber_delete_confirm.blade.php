@extend('layout.member')

@section('title', '退会')

@section('content')
<div class="serch-form">
  <h2>退会確認</h2>
  <form action="" method='post'>
    @csrf

      <p>本当に退会しますか？</p>
      <p><font color="#F00">※退会を進める場合、確定済みの予約が自動キャンセルとなります</font></p>
    <button><a href="">戻る</a></button>
    <button type='submit'>確認</button>
  </form>

</div>
@endsection
