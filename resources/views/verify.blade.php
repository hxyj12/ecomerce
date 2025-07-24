<form action="{{ route('verify') }}" method="post">
    @csrf
    <input type="text" name="otp" placeholder="otp">
    <input type="submit" value="verify">
</form>
