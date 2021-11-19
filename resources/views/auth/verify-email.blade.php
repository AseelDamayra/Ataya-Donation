<h1>التحقق من البريد الإلكتروني</h1>

<p>يرجى التحقق من عنوان بريدك الإلكتروني من خلال النقر على الرابط الموجود في البريد الذي أرسلناه لك للتو. شكرا!</p>

<form action="{{ route('verification.request') }}" method="post">
    @csrf
    <button type="submit">Request a new link</button>
</form>