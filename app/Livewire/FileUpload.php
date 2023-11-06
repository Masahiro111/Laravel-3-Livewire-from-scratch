<?php

namespace App\Livewire;

use App\Models\Fileupload as ModelsFileupload;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $name;

    #[Rule(('file|mimes:pdf,doc,docx|max:2048'))]
    public $file;

    public $path;

    public $downloads;

    public function mount()
    {
        $this->downloads = ModelsFileupload::all();
    }

    public function save()
    {
        $this->validate();
        $this->path = $this->file->store('myfiles');

        ModelsFileupload::query()
            ->create([
                'name' => $this->name,
                'path' => $this->path,
            ]);

        session()->flash('status', 'File uploaded');

        return $this->redirect('fileupload', navigate: true);
    }

    public function downloadFile(ModelsFileupload $uploadfile)
    {
        if (Storage::disk('local')->exists($uploadfile->path)) {
            session()->flash('status', 'File is downloading');
            return Storage::download($uploadfile->path, $uploadfile->name);
        }

        session()->flash('status', 'File not found');
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}
