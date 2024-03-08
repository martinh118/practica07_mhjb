@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<div class="contenidor">
    <h1>Articulos</h1>
    @csrf
    <section class='articles'>
        <ul>
            @forelse($arts as $articulo)
            <li><b>{{ $articulo->{'ID'} }}</b>: {{ $articulo->{'article'} }}</li>
            @empty
            <li>Ningún articulo a mostrars!!!</li>
            @endforelse
        </ul>
    </section>

    <section class='paginacio'>
        <ul>
            {{ $arts->links() }}
        </ul>
    </section>
</div>


</html>