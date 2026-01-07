<?php

namespace App\Controllers;

class Upload extends BaseController
{
    public function index()
    {
        return view('upload');
    }

    public function submit()
    {
        $rules = [
            'image' => [
                'rules' => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/webp]|max_size[image,2048]',
                'errors' => [
                    'uploaded' => 'Please select an image',
                    'is_image' => 'The file must be an image',
                    'mime_in'  => 'Only JPG, PNG, WEBP images are allowed',
                    'max_size' => 'Image size should be less than 2MB',
                ]
            ]
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->with('error', $this->validator->getError('image'));
        }

        $file = $this->request->getFile('image');

        // Generate safe random name
        $newName = $file->getRandomName();

        // Move file to public/uploads
        $file->move(ROOTPATH . 'public/uploads', $newName);

        // File path to store in DB (later)
        $imagePath = 'uploads/' . $newName;

        return redirect()->back()
            ->with('success', 'Image uploaded successfully!')
            ->with('image', $imagePath);
    }

}
