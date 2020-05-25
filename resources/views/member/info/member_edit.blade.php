@extends('layout.member')

@section('title', '会員登録情報変更')

@section('content')
<div class="card">
    <div class="card-body m-3">
        <h5>会員登録情報変更</h5>
        <p>
            <font color="#F00">*は必須項目</font>
        </p>

        <form action="{{route('member.edit.confirm')}}" method='post'>
            @csrf
            <div class="form-group">
                <label for="username">*ユーザーネーム</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                    value="{{ $data['username'] }}">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="family_name">*氏名(姓)</label>
                    <input class="form-control @error('family_name') is-invalid @enderror" type="text"
                        name="family_name" value="{{ $data['family_name'] }}">
                    @error('family_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="first_name">*氏名(名)</label>
                    <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name"
                        value="{{ $data['first_name'] }}">
                    @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="family_name_kana">*ふりがな(姓)</label>
                    <input class="form-control @error('family_name_kana') is-invalid @enderror" type="text"
                        name="family_name_kana" value="{{ $data['family_name_kana'] }}">
                    @error('family_name_kana')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="first_name_kana">*ふりがな(名)</label>
                    <input class="form-control @error('first_name_kana') is-invalid @enderror" type="text"
                        name="first_name_kana" value="{{ $data['first_name_kana'] }}">
                    @error('first_name_kana')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3">
                    {!! Form::label('year', '*生年月日(年)') !!}
                    {{Form::selectYear('year', 1900, 2020, $birthday[0], ['class' => 'form-control'])}}
                </div>
                <div class="col-3">
                    {!! Form::label('month', '*生年月日(月)') !!}
                    {{Form::selectRange('month', 1, 12, $birthday[1], ['class' => 'form-control'])}}
                </div>
                <div class="col-3">
                    {!! Form::label('day', '*生年月日(日)') !!}
                    {{Form::selectRange('day', 1, 31, $birthday[2], ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">*性別</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('sex') is-invalid @enderror" type="radio" name="sex"
                        id="inlineRadio1" value="男性">
                    <label class="form-check-label">男性</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('sex') is-invalid @enderror" type="radio" name="sex"
                        id="inlineRadio2" value="女性">
                    <label class="form-check-label">女性</label>
                    @error('sex')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="tel">*電話番号</label>
                    <input class="form-control @error('tel') is-invalid @enderror" type="text" name="tel"
                        value="{{ $data['tel'] }}">
                    @error('tel')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="email">*メールアドレス</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                        value="{{ $data['email'] }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="postal">*郵便番号</label>
                    <input class="form-control @error('postal') is-invalid @enderror" type="text" name="postal"
                        value="{{ $data['postal'] }}">
                    @error('postal')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="prefecture">*都道府県</label>
                    <select class="form-control @error('prefecture') is-invalid @enderror" type="text"
                        name="prefecture">
                        <option value="" selected>選択してください</option>
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
                    </select>
                    @error('prefecture')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label for="city">市区町村</label>
                    <input class="form-control @error('city') is-invalid @enderror" type="text" name="city"
                        value="{{ $data['city'] }}">
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="block">番地・ビル名</label>
                    <input class="form-control @error('block') is-invalid @enderror" type="text" name="block"
                        value="{{ $data['block'] }}">
                    @error('block')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button class="btn"><a href="{{route('member.hotel.find')}}">戻る</a></button>
            <button class="btn btn-primary" type='submit'>確認</button>
        </form>
    </div>
</div>
</div>
<br>
@endsection