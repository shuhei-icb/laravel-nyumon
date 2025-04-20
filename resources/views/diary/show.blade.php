<h1>{{ $diary->title }}</h1>

<div>
  <div>{{ $diary->body }}</div>
  <div>{{ $diary->date }}</div>
</div>

<div>
  <form method="post" action="{{ route('diary.destroy', $diary) }}">
    @csrf
    @method('delete')
    <button>削除</button>
  </form>
</div>
