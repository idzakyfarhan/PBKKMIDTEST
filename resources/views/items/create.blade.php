<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-success-status class="mb-4" :status="session('success')" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ url('add-items') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="items_name" :value="__('Items Name')" />
                            <x-text-input id="items_name" class="block mt-1 w-full" type="text" name="items_name" autofocus />
                        </div>
                        <div>
                            <x-input-label for="items_type" :value="__('Items Type')" />
                            <x-text-input id="items_type" class="block mt-1 w-full" type="text" name="items_type" />
                        </div>
                        <div>
                            <x-input-label for="items_conditions" :value="__('Items Condition')" />
                            <x-text-input id="items_conditions" class="block mt-1 w-full" type="text" name="items_conditions"  />
                        </div>
                        <div>
                            <x-input-label for="items_description" :value="__('Items Description')" />
                            <x-text-input id="items_description" class="block mt-1 w-full" type="text" name="items_description" />
                        </div>
                        <div>
                            <x-input-label for="items_defects" :value="__('Items defects')" />
                            <x-text-input id="items_defects" class="block mt-1 w-full" type="text" name="items_defects" />
                        </div>
                        <div>
                            <x-input-label for="items_amount" :value="__('Items Amount')" />
                            <x-text-input id="items_amount" class="block mt-1 w-full" type="integer" name="items_amount" />
                        </div>
                        <div>
                            <x-primary-button class="mt-3">
                                {{ __('Save Item') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
