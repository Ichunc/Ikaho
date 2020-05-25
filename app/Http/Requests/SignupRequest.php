<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
  public function authorize()
  {
      if($this->path() == 'signup')
        {
          return true;
        } else {
          return false;
        }
  }

  public function rules()
  {
      return [
          'username' => 'required|unique:members,username|max:20|regex:/^[0-9a-zA-Z]+$/',
          'family_name' => 'required|max:10',
          'family_name_kana' => 'required|max:10|regex:/^[ぁ-ん]+$/',
          'first_name' => 'required|max:10',
          'first_name_kana' => 'required|max:10|regex:/^[ぁ-ん]+$/',
          'postal' => 'required|regex:/^\d{3}\-\d{4}$/',
          'prefectures' => 'required',
          'city' => 'required|max:20',
          'block' => 'required|max:90',
          'tel' => 'required|regex:/^0\d{1,4}-\d{1,4}-\d{3,4}$/',
          'email' => 'email|unique:members,email|confirmed',
          'password' => 'required|between:6,20|confirmed'
      ];
  }

  public function messages()
  {
    return [
      'username.required' => '入力されていません',
      'username.unique' => 'そのユーザーネームは使えません',
      'username.max' => '20文字以内で入力してください',
      'username.regex' => '英数字のみ使ってください',
      'family_name.required' => '入力されていません',
      'family_name.max' => '10文字以内で入力してください',
      'family_name_kana.required' => '入力されていません',
      'family_name_kana.max' => '10文字以内で入力してください',
      'family_name_kana.regex' => 'ひらがなで入力してください',
      'first_name.required' => '入力されていません',
      'first_name_kana.required' => '入力されていません',
      'first_name_kana.regex' => 'ひらがなで入力してください',
      'postal.required' => '入力されていません',
      'postal.regex' => '〇〇〇-〇〇〇〇という形で入力してください',
      'prefectures.required' => '選択されていません',
      'city.required' => '入力されていません',
      'city.max' => '20文字以内で入力してください',
      'block.required' => '入力されていません',
      'block.max' => '90文字以内で入力してください',
      'tel.required' => '入力されていません',
      'tel.regex' => '電話番号が正しくありません',
      'email.email' => '正しい形式で入力してください',
      'email.unique' => 'そのメールアドレスは既に登録されています',
      'email.confirmed' => '確認用メールアドレスと異なります',
      'password.required' => '入力されていません',
      'password.between' => '6文字以上20文字以内で入力してください',
      'password.confirm' => 'もう一度入力してください'
      ];
  }
}
