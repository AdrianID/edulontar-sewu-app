<div class="container mx-auto p-6 space-y-8">

    <!-- Carousel Section -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-800">Carousel</h2>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Add Slide</button>
        </div>
        <livewire:components.datatable
            :model-class="\App\Models\CmsContents::class"
            :columns-config="[
                ['label' => 'ID', 'field' => 'id','type' => 'text'],
                ['label' => 'Image', 'field' => 'image','type' => 'text'],
                ['label' => 'Title', 'field' => 'title','type' => 'text'],
                ['label' => 'Created At', 'field' => 'created_at','type' => 'text'],
                ['label' => 'Updated At', 'field' => 'updated_at','type' => 'text']
            ]"
        />
    </div>

    <!-- Latest News Section -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-800">Latest News</h2>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Add News</button>
        </div>

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-3 border-b font-semibold">Title</th>
                    <th class="p-3 border-b font-semibold">Date</th>
                    <th class="p-3 border-b font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through news items -->
                <tr>
                    <td class="p-3 border-b">Example News Title</td>
                    <td class="p-3 border-b">2024-11-08</td>
                    <td class="p-3 border-b">
                        <button class="text-blue-500 hover:underline">Edit</button> | 
                        <button class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Upcoming Events Section -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-800">Upcoming Events</h2>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Add Event</button>
        </div>
        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-3 border-b font-semibold">Event</th>
                    <th class="p-3 border-b font-semibold">Date</th>
                    <th class="p-3 border-b font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through event items -->
                <tr>
                    <td class="p-3 border-b">Example Event</td>
                    <td class="p-3 border-b">2024-11-10</td>
                    <td class="p-3 border-b">
                        <button class="text-blue-500 hover:underline">Edit</button> | 
                        <button class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Popular Destinations Section -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-800">Popular Destinations</h2>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Add Destination</button>
        </div>
        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-3 border-b font-semibold">Destination</th>
                    <th class="p-3 border-b font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through destination items -->
                <tr>
                    <td class="p-3 border-b">Example Destination</td>
                    <td class="p-3 border-b">
                        <button class="text-blue-500 hover:underline">Edit</button> | 
                        <button class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
