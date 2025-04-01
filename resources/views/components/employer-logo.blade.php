@props([
    "employer",
    "width" => 90,
])
<img
    src="{{ asset($employer->logo) }}"
    alt="brak"
    class="rounded-xl"
    width="{{ $width }}"
/>
