<?php

namespace App\Livewire\Admin\Promo;

use App\Models\Promo;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPromo extends Component
{
    use WithFileUploads;

    public $title, $price, $discount, $description, $cover_image;
    public $id, $existingCoverImage;

    protected $rules = [
        'title' => 'required|string|max:255',
        'price' => 'required|numeric',
        'discount' => 'nullable|numeric|min:0|max:100',
        'description' => 'nullable|string',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    /**
     * Mount the component and load existing promo data.
     */
    public function mount($id)
    {
        $promo = Promo::findOrFail($id);
        $this->id = $promo->id;
        $this->title = $promo->title;
        $this->price = $promo->price;
        $this->discount = $promo->discount;
        $this->description = $promo->description;
        $this->existingCoverImage = $promo->cover_image;
    }

    /**
     * Render the component view.
     */
    public function render()
    {
        return view('livewire.admin.promo.edit-promo');
    }

    /**
     * Update the promo details.
     */
    public function update()
    {
        $this->validate();

        // Handle cover image upload
        $imagePath = $this->existingCoverImage; // Use existing cover image if no new image is uploaded
        if ($this->cover_image) {
            $imageName = time() . '_' . uniqid() . '.' . $this->cover_image->getClientOriginalExtension();
            $this->cover_image->storeAs('images', $imageName, 'public');
            $imagePath = $imageName;

            // Delete old image if it exists
            if ($this->existingCoverImage) {
                $filePath = public_path('storage/images/' . $this->existingCoverImage);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        // Update promo in the database
        $promo = Promo::findOrFail($this->id);
        $promo->update([
            'title' => $this->title,
            'price' => $this->price,
            'discount' => $this->discount,
            'description' => $this->description,
            'cover_image' => $imagePath,
        ]);

        session()->flash('message', 'Promo berhasil diperbarui.');
        return redirect()->route('view.promo'); // Redirect to promo listing
    }
}
