@props(['trigger'])
<div x-data="{ show: false }" @click.away="{show: false}">
    <div class="" @click="show= !show">
        {{$trigger}}
    </div>
    <div x-show="show" class="py-3 absolute bg-gray-100 mt-2 rounded-xl z-50" x-cloak>
        {{$slot}}
    </div>
</div>
