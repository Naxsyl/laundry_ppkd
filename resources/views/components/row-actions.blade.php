@props(['row'])

<a href="{{ route('users.edit', $row['id']) }}" >
  <span class="text-blue-light-500 hover:underline mr-2">

    Edit
  </span>
</a>

<form action="{{ route('users.destroy', $row['id']) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus?')">
  @csrf
  @method('DELETE')
  <button type="submit" class="text-error-600 hover:underline">Hapus</button>
</form>
