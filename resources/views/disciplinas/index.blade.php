<ul>
@foreach ($disciplinas as $disciplina)
    <li><a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a>: {{ $disciplina->ementa }} </li>
@endforeach
</ul>
<br />
<a href="/disciplinas/create">Criar disciplina</a>
