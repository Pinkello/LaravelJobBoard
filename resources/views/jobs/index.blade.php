<x-layout>
    <div class="space-y-10">
        <section class="pt-6 text-center">
            <h1 class="text-4xl font-bold">Let's Find your next job</h1>

            {{--
                <form action="">
                <input
                type="text"
                placeholder="Web Developer..."
                class="mt-6 w-full max-w-xl rounded-xl border-white/10 bg-white/5 px-5 py-4"
                />
                </form>
            --}}

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input
                    :label='false'
                    name="q"
                    placeholder="Web Developer..."
                />
            </x-forms.form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="mt-6 grid gap-8 lg:grid-cols-3">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag></x-tag>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
