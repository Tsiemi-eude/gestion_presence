@extends('layouts.app')

@section('content')
    <div class="roles-permissions">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Assigner des Professeurs à la Classe : {{ $class->class_name }}</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('classes.index') }}" class="bg-gray-600 text-white text-sm uppercase py-2 px-4 flex items-center rounded">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M257.5 445.1c-9.5 9.4-24.9 9.4-34.4 0l-192-192c-9.4-9.4-9.4-24.6 0-33.9l192-192c9.4-9.4 24.6-9.4 34.4 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L118.6 224H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H118.6l161.5 161.4c9.4 9.4 9.4 24.6 0 33.9L257.5 445.1z"></path>
                    </svg>
                    <span class="ml-2 text-xs font-semibold">Retour</span>
                </a>
            </div>
        </div>

        <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
            <form action="{{ route('class.assign.teachers.store', $class->id) }}" method="POST" class="px-4 py-6">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="teachers">
                        Professeurs
                    </label>
                    <select name="teachers[]" id="teachers" class="block appearance-none w-full bg-gray-200 border border-gray-400 text-gray-700 py-2 px-3 rounded leading-tight focus:outline-none focus:bg-white" multiple>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}" {{ in_array($teacher->id, $assignedTeachers) ? 'selected' : '' }}>
                                {{ $teacher->user->name }}
                            </option>
                        @endforeach
                    </select>
                    <p class="text-gray-600 text-sm mt-2">Maintenez la touche <strong>Ctrl</strong> (ou <strong>Cmd</strong> sur Mac) pour sélectionner plusieurs professeurs.</p>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Assigner
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
