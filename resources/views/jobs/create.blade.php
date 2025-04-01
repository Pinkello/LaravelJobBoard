<x-layout>
    <x-page-heading>New job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="title" name="title" placeholder="title" />
        <x-forms.input label="salary" name="salary" placeholder="salary" />
        <x-forms.input
            label="location"
            name="location"
            placeholder="location"
        />

        <x-forms.select label="schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="url" name="url" placeholder="url" />
        <x-forms.checkbox label="featured" name="featured" />

        <x-forms.divider />

        <x-forms.input label="tags" name="tags" placeholder="tags" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
