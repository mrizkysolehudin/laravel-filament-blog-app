<?php
/** @var $posts Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>
    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3 pb-10">

        @foreach ($posts as $post)
            <x-post-item :post="$post" />
        @endforeach

        <div class="pt-10"></div>

        {{ $posts->onEachSide(1)->links() }}

    </section>
</x-app-layout>
