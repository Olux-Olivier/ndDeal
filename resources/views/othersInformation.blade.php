<h1>cette page permet de completer les informations </h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="id" value="{{Auth::user()->id}}">
    <label for="">Date de naissance</label>
    <input type="date" name="birthday" required>
    <br><br>
    <label for="">Telephone</label>
    <input type="tel" pattern="0[0-9]*" name="phone"  required>
    <br><br>
    <label for="">Adresse complet</label>
    <input type="text" name="adress" required>
    <br><br>
    <input type="submit"value="Continuer">
</form>