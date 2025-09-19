<x-layouts.app>

   <x-partials.page-header title="User Management" :breadcrumbs="[
       ['label' => 'Users']
   ]
   " />
    
   <div class=" py-2">
    <a
    href="{{ route('users.create') }}"
    class="inline-flex items-center gap-2 px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-brand-500 shadow-theme-xs hover:bg-brand-600"
    >
    Tambah
    </a>
  </div>
   <x-table :rows="$users" actionComponent="row-actions" with-numbering="true">
    
</x-table>

</x-layouts.app>