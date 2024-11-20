<?php

namespace App\Livewire\Admin\Promo;

use App\Models\Promo;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostPromo extends Component
{
    use WithFileUploads;

    public $title, $price, $discount, $description, $cover_image; 
    public $promoId;
    public $isEditMode = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'price' => 'required|numeric',
        'discount' => 'nullable|numeric|min:0|max:100',
        'description' => 'nullable|string',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    /**
     * Render the component view.
     */
    public function render()
    {
        return view('livewire.admin.promo.post-promo');
    }

    /**
     * Store a new promo.
     */
    public function store()
    {
        $this->validate();

        // Handle cover image upload
        $imagePath = null;
        if ($this->cover_image) {
            $imageName = time() . '_' . uniqid() . '.' . $this->cover_image->getClientOriginalExtension();
            $this->cover_image->storeAs('images', $imageName, 'public');
            $imagePath = $imageName;
        }

        // Save promo to the database
        Promo::create([
            'title' => $this->title,
            'price' => $this->price,
            'discount' => $this->discount,
            'description' => $this->description,
            'cover_image' => $imagePath, 
        ]);

        session()->flash('message', 'Promo berhasil disimpan.');
        $this->resetFields();
    }

    /**
     * Delete a promo.
     */
    public function delete($id)
    {
        $promo = Promo::findOrFail($id);

        // Delete associated cover image
        if ($promo->cover_image) {
            $filePath = public_path('app/public/images/' . $promo->cover_image);
            if (file_exists($filePath)) {
                unlink($filePath); 
            }
        }

        $promo->delete();

        session()->flash('message', 'Promo berhasil dihapus.');
    }

    /**
     * Reset the input fields.
     */
    public function resetFields()
    {
        $this->title = '';
        $this->price = '';
        $this->discount = '';
        $this->description = '';
        $this->cover_image = null;
        $this->isEditMode = false;
        $this->promoId = null;
    }
}
