<div class="container mx-auto p-6 space-y-8">
   <!-- Carousel Section -->
   <div class="bg-white p-6 rounded-lg shadow-md">
      <div class="flex justify-between items-center mb-4">
         <h2 class="text-xl font-semibold text-gray-800">Carousel</h2>
         <button wire:click="openModal(1)"  class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Add Slide</button>
      </div>
      <livewire:components.datatable
         :model-class="\App\Models\CmsContents::class"
         :columns-config="[
         ['label' => 'ID', 'field' => 'id','type' => 'text'],
         ['label' => 'Image', 'field' => 'image','type' => 'image'],
         ['label' => 'Title', 'field' => 'title','type' => 'text'],
         ['label' => 'Created At', 'field' => 'created_at','type' => 'text'],
         ['label' => 'Updated At', 'field' => 'updated_at','type' => 'text']
         ]"
         />
   </div>
   <!-- Modal Background -->
    @if($isModalOpen)
   <div  id="modal-create" class="opacity-100 fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-end transition-opacity duration-300 ease-in-out">
      <!-- Modal Content -->
      <div
         class="opacity-100 scale-100 bg-white w-full mr-32 max-w-4xl rounded-lg shadow-lg transform scale-95 opacity-0 transition-transform duration-300 ease-in-out"
         id="modal-content"
         >
         <div class="px-8 py-6">
            <div class="flex justify-between items-center mb-6">
               <h2 class="text-2xl font-semibold text-gray-800">Create New Item</h2>
               <button wire:click="closeModal" class="text-gray-500 hover:text-gray-800 text-2xl font-bold">&times;</button>
            </div>
            <!-- Form Content -->
            <form id="create-form">
            <input type="hidden" id="id_konten" name="id_konten" wire:model="idKonten">
               <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                  <div>
                     <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                     <input
                        type="text"
                        wire:model="title"
                        id="title"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter title"
                        required
                        />
                  </div>
                  <div>
                     <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                     <select
                        id="category"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                        <option value="news">News</option>
                        <option value="event">Event</option>
                        <option value="destination">Destination</option>
                     </select>
                  </div>
               </div>
               <div class="mb-6">
                  <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                  <textarea
                     wire:model="description"
                     id="description"
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                     rows="6"
                     placeholder="Enter description"
                     ></textarea>
               </div>
               <div class="mb-6">
                  <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Upload Image</label>
                  <input
                     type="file"
                     wire:model="image"
                     id="image"
                     class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-100 file:text-blue-600 hover:file:bg-blue-200"
                     />
               </div>
               <div class="flex justify-end">
                  <button
                     type="button"
                     onclick="toggleModal('modal-create')"
                     class="bg-gray-300 text-gray-800 px-6 py-3 rounded-lg mr-4 hover:bg-gray-400"
                     >
                  Cancel
                  </button>
                  <button
                    wire:click="save"
                     type="submit"
                     class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600"
                     >
                  Save
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
   @endif
</div>