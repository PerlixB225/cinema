<form method="POST" action="/members/create"> 
    @csrf
    Enter your first name: <input type="text" name="firstname"><br>
    Enter your surname: <input type="text" name="surname"><br>
    Enter your email: <input type="email" name="email"><br>
    Enter your phone: <input type="tel" name="phone"><br>
    <input type="submit">
</form>
