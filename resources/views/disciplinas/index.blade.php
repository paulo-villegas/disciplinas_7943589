<ul>
@foreach ($disciplinas as $disciplina)
    <li>{{ $disciplina->titulo }}: {{ $disciplina->ementa }} </li>
@endforeach
</ul>
