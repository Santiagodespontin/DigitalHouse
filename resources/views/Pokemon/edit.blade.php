@extends('Template.basic')
@section('content')
<form id="create" name="create" method="POST" style="text-align: center;" enctype="multipart/form-data">
    @csrf
    @method('put')

        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value= {{old('name')}}>
            </div>
            <div>
                <label for="weight">Weight</label>
                <input type="text" name="weight" id="weight"value= {{old('weight')}}>
            </div>
            <div>
                <label for="height">Height</label>
                <input type="text" name="height" id="height"value= {{old('height')}}>
            </div>
            <div>
                    <label for="evolves">Evolves</label>
                    <select name="evolves" id="evolves">
                            @foreach ($pokemon as $poke)
                            <option name="type_id[]" id="type_id[]" value="{{$poke->id}}">{{$poke->name}}</option>
                        @endforeach
                    </select>
            </div>
            <div>
                <label for="type_id">Type</label><br>
                    @foreach ($type as $t)
                        <input type="checkbox"name="type_id[]" id="type_id[]" value="{{$t->id}}">{{$t->name}}
                    @endforeach
            </div>
            <button type="submit" class="button button-primary">Agregar Pokemon</button>
        </form>
@endsection
