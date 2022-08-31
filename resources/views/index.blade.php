<x-layout>
  @if (!Auth::check())
    @include('partials._hero')
  @endif
</x-layout>