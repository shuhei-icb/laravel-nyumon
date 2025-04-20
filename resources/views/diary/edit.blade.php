<form action="{{ route('diary.update', $diary->id) }}" method="POST">
  @csrf
  @method('patch')
  <div>
    <label for="title">タイトル：</label><br>
    <input type="text" id="title" name="title" value="{{ old('title', $diary->title) }}" required>
  </div>

  <div>
    <label for="body">本文：</label><br>
    <textarea id="body" name="body" rows="4" cols="40" required>{{ old('body', $diary->body) }}</textarea>
  </div>

  <div>
    <input type="submit" value="更新する">
  </div>
</form>
