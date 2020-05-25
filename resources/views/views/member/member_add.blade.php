@extends('layout.member')

@section('title', '会員登録')
<!-- 外部ファイルのやりかたがわからなかったためここにscriptで記述しました　小西
  <script type="text/javascript" {{ asset('JavaScript.js')}}> </script>
-->
<!--  google chromeではdocument.writeをjsのループで使用するな？とかなんとかって怒られました　小西-->


  <script>
  function makenum(startnum, endnum){
    for (let i = startnum; i <= endnum; i++){
      document.write('<option value=' + i + '>' + i + '</option>');
    };
  };
  </script>



@endsction

@section('content')
  <h2>会員登録</h2>
  <p><font color="#F00">＊は必須項目</font></p>

  <form action="" method='post'>
  @csrf
  <table>
    <tr>
      <th>ユーザーネーム＊</th>
      <td><input type="text" name='username' value="{{old('username')}}" placeholder="半角英数字のみ"></td>
      @error('username')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>苗字＊</th>
      <td><input type="text" name='family_name' value="{{old('family_name')}}" placeholder="例)新宿"></td>
      @error('family_name')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>苗字かな＊</th>
      <td><input type="text" name='family_name_kana' value="{{old('family_name_kana')}}" placeholder="例)しんじゅく"></td>
      @error('family_name_kana')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>名前＊</th>
      <td><input type="text" name='first_name' value="{{old('first_name')}}" placeholder="例)太郎"></td>
      @error('first_name')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>名前かな＊</th>
      <td><input type="text" name='first_name_kana' value="{{old('first_name_kana')}}" placeholder="例)たろう"></td>
      @error('first_name_kana')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>性別＊</th>
      <td><select name="sex">
        <option value="男" selected>男</option>
        <option value="女">女</option>
      </select></td>
    </tr>
    <tr>
      <th>郵便番号＊</th>
      <td><input type="text" name='postal' value="{{old('postal')}}" placeholder="例)100-0001"></td>
      @error('postal')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>都道府県＊</th>
      <td><select name="prefectures">
        <option value="" selected style='display:none;'>選択してください</option>
        <option value="北海道">北海道</option>
        <option value="青森県">青森県</option>
        <option value="岩手県">岩手県</option>
        <option value="宮城県">宮城県</option>
        <option value="秋田県">秋田県</option>
        <option value="山形県">山形県</option>
        <option value="福島県">福島県</option>
        <option value="茨城県">茨城県</option>
        <option value="栃木県">栃木県</option>
        <option value="群馬県">群馬県</option>
        <option value="埼玉県">埼玉県</option>
        <option value="千葉県">千葉県</option>
        <option value="東京都">東京都</option>
        <option value="神奈川県">神奈川県</option>
        <option value="新潟県">新潟県</option>
        <option value="富山県">富山県</option>
        <option value="石川県">石川県</option>
        <option value="福井県">福井県</option>
        <option value="山梨県">山梨県</option>
        <option value="長野県">長野県</option>
        <option value="岐阜県">岐阜県</option>
        <option value="静岡県">静岡県</option>
        <option value="愛知県">愛知県</option>
        <option value="三重県">三重県</option>
        <option value="滋賀県">滋賀県</option>
        <option value="京都府">京都府</option>
        <option value="大阪府">大阪府</option>
        <option value="兵庫県">兵庫県</option>
        <option value="奈良県">奈良県</option>
        <option value="和歌山県">和歌山県</option>
        <option value="鳥取県">鳥取県</option>
        <option value="島根県">島根県</option>
        <option value="岡山県">岡山県</option>
        <option value="広島県">広島県</option>
        <option value="山口県">山口県</option>
        <option value="徳島県">徳島県</option>
        <option value="香川県">香川県</option>
        <option value="愛媛県">愛媛県</option>
        <option value="高知県">高知県</option>
        <option value="福岡県">福岡県</option>
        <option value="佐賀県">佐賀県</option>
        <option value="長崎県">長崎県</option>
        <option value="熊本県">熊本県</option>
        <option value="大分県">大分県</option>
        <option value="宮崎県">宮崎県</option>
        <option value="鹿児島県">鹿児島県</option>
        <option value="沖縄県">沖縄県</option>
    </select></td>
    @error('prefectures')
    <td>{{$message}}</td>
    @endif
    </tr>
    <tr>
      <th>市区町村＊</th>
      <td><input type="text" name='city' value="{{old('city')}}"></td>
      @error('city')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>番地＊</th>
      <td><input type="text" name='block' value="{{old('block')}}"></td>
      @error('block')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>電話番号＊</th>
      <td><input type="text" name='tel' value="{{old('tel')}}" placeholder="例)090-1111-1111"></td>
      @error('tel')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>Eメールアドレス</th>
      <td><input type="text" name='email' value="{{old('email')}}"></td>
      @error('email')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>Eメールアドレス（確認用）</th>
      <td><input type="text" name='email_confirmation' value="{{old('email_confirmation')}}"></td>
    </tr>
    <tr>
      <th>生年月日＊</th>
        <td><select name='year'>
                <script>
                  makenum(1900, 2020)
                </script>
            </select>年

            <select name='month'>
                <script>
                  makenum(1, 12)
                </script>
            </select>月

            <select name='day'>
                <script>
                  makenum(1, 31)
                </script>
            </select>日</td>
        @error('year')
        <td>{{$message}}</td>
        @endif
        @error('month')
        <td>{{$message}}</td>
        @endif
        @error('day')
        <td>{{$message}}</td>
        @endif
    </tr>
    <tr>
      <th>パスワード＊</th>
      <td><input type="password" name='password'></td>
      @error('password')
      <td>{{$message}}</td>
      @endif
    </tr>
    <tr>
      <th>パスワード（確認用）＊</th>
      <td><input type="password" name='password_confirmation'></td>
    </tr>
  </table>

  <button type='submit'>確認</button>
  </form>

</div>
@endsection
