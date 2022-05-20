@csrf
<label for="">
    Titulo del proyecto <br>
    <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}">
</label>
 <br>
<label for="">
    URL del proyecto <br>
    <input type="text" name="url" id="url" value="{{ old('url', $project->url) }}">
</label>
<br>
<label for="">
    Descripcion del proyecto <br>
    <textarea name="description" id="description" cols="30" rows="10"> {{ old('description', $project->description) }}</textarea>
</label>
<button>{{ $btnText}}</button>