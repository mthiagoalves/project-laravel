<h1>Pagina de administrador</h1>

<h2>Adicionar um Café</h2>

<form action="/admin" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" value="{{old('name')}}" placeholder="name of coffe">
        <br>
    <input name="location" type="text" value="{{old('location')}}" placeholder="location of coffe">
        <br>
    <input name="description" type="text" value="{{old('description')}}" placeholder="description">
        <br>
    <input type="file" name="img">

    <button type="submit">Save</button>

</form>




