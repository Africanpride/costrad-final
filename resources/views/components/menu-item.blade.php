@props(['isActive', 'href'])

<li>
    <a
      href="{{ $href }}"
      class="block px-1 py-2 rounded-md font-bold items-center whitespace-nowrap hover:text-firefly-800 {{ $isActive ? ' text-firefly-500 hover:text-firefly-700' : 'text-gray-500' }}"
    >
      {{ $slot }}
    </a>
  </li>
