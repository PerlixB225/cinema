<form method="POST" action="{{ route('movies.new') }}">
    @csrf
    Enter movie title: <input type="text" name="title"><br>
    Enter movie genre: <input type="text" name="genre"><br>
    Enter release date: <input type="date" name="release_date"><br>
    Enter movie duration: <input type="text" name="duration"><br>
    <input type="submit">
</form>
