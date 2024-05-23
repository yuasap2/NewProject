<form method="POST"  action="{{ route('send') }}" class="confirm__ar">
    {{ csrf_field() }}
    {{ method_field('POST') }}
     <dt class="connfirm__tag">担当者名</dt>
     <dd>{{ $input['name']}}</dd>
     <input type="hidden" name="name" value="{{ $inputs['name'] }}">
    </dl>
    <dl>
        <dt class="confirm__tag">フリガナ</dt>
        <dd>{{ $inputs['cname']}}</dd>
        <input type="hidden" name="cname" value="{{ $inputs['cname'] }}">
    </dl>
    <dl>
        <dt class="confirm__tag">電話番号</dt>
        <dd>{{ $inputs['tel']}}</dd>
        <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
    </dl>
    <dl>
        <dt class="confirm__tag">お問い合わせ内容</dt>
        <dd>
            {!! nl2br(e($inputs['content'])) !!}
            <input type="hidden" name="content" value="{{ $inputs['content'] }}">
        </dd>
    </dl>

    <div class="comfirm_bk">
        <a href="{{ route('index' }}" class="back_btn">戻る</span></a>
        <input onclick="submit();" type="button" value="この内容で送信する" class="confirm_btn">
    </div>
</form>