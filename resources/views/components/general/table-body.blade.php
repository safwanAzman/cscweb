<td {{ ($colspan != '') ? 'colspan = '.$colspan : '' }} {{ $attributes->merge(['class' => 'px-6 py-4 whitespace-no-wrap text-sm leading-5 ']) }}>
{{-- .($sort == 'yes' ? 'mr-2' : '') --}}
    {{ $slot }}
</td>