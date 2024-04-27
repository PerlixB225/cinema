<form method="POST" action="/members/create">
    @csrf
    Enter your first name: <input type="text" name="Firstname"><br>
    Enter your surname: <input type="text" name="Surname"><br>
    Enter your phone number: <input type="text" name="Phone"><br>
    Enter your age: <input type="text" name="Age"><br>
    <input type="submit">
</form>
