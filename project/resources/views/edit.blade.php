<h1>Pagina de administrador</h1>

<h2>Edite um Café</h2>

<form action="/cafe/update/{{$cafes->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{$cafes->name}}" placeholder="name of coffe" value="">
        <br>
    <input name="location" type="text" value=" {{$cafes->location}} " placeholder="location of coffe">
        <br>
    <input name="description" type="text" value=" {{$cafes->description}}" placeholder="description">
        <br>
    <input type="file" name="img" value="{{old('img')}}">

    <button type="submit">Save</button>

</form>




