<form method="POST" action="{{ route('confirm')}}">
    @csrf
    @method('POST')
    <div class="form-inner">
        <div class="form-cont">
            <div class="mg-b_40">
                <label for="name" class="required-tag">担当者名</label><br>
                <input type="text" placeholder="山田太郎" id="name" name="name" value="{{ old('name') }}">
                @if($errors->has('name'))
                  <p class="required">{{$errors->first('name')}}</p>
                @endif
            </div>
            <div class="mg-b_40">
                <label for="cname" class="required-tag">フリガナ</label><br>
                <input type="text" placeholder="ヤマダタロウ" id="cname" name="cname" value="{{ old('cname') }}">
                @if($errors->has('cname'))
                 <p class="required">{{ $error->first('cname')}}</p>
                 @endif
            </div>
            <div class="mg-b_40">
                <label for="tel" class="required-tag">電話番号</label><br>
                <input type="tel" placeholder="0123456789" id="tel" name="tel" value="{{ old('tel') }}">
                @if($errors->has('tel'))
                 <p class="required">{{ $errors->first('tel')}}
                @endif
            </div>
            <div class="mg-b_40">
                <label for="email" class="required-tag">メールアドレス</label><br>
                <input type="email" placeholder="sample@example.com" id="mail" name="email"  class="mg-b_10" value="{{ old('email') }}"><br>
                <input type="email" placeholder="確認のため再度入力してください" id="mail" name="email_confirmation">
                @if($errors->has('mail'))
                 <p class="required">{{ $errors->first(email1) }}</p>
                @endif
                @if($errors->has('mail2'))
                <p class="required">{{ $errors->first(email2) }}</p>
                @endif
            </div>
            <div class="mg-b_40">
                <label for="content" class="lg-label">お問い合わせ内容</label><br>
                <textarea name="content" id="content" cols="30" rows="10" placeholder="Message">{{ old('content') }}</textarea>
            </div>
       </div>
    </div>