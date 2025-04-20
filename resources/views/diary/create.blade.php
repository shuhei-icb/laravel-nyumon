<form action="{{ route('diary.store') }}" method="POST">
  @csrf

  <div>
    <label for="title">タイトル：</label><br>
    <input type="text" id="title" name="title" value="{{ old('title') }}" required>
  </div>

  <div>
    <label for="body">本文：</label><br>
    <textarea id="body" name="body" rows="4" cols="40" required>{{ old('body') }}</textarea>
  </div>

  <div>
    <input type="submit" value="送信">
  </div>
</form>
