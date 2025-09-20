<?php

namespace App\Livewire;

use App\Models\Announce;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class AnnounceCreate extends Component
{
    public $title;

    public $price;

    public $description;

    public $category_id;

    public $user_id;
    public function render()
    {
        return view('livewire.announce-create');
    }

    public function storeAnnounce()
    {
        $this->validate(
            [
                "title" => [
                    "required",
                    "min:3",
                    Rule::unique("announces", "title")->where("user_id", Auth::user()->id),
                ],
                "price" => "required",
                "description" => "required",
                "category_id" => "nullable",
            ],
            [
                "title.required" => "Il titolo è obbligatorio",
                "title.min" => "Il titolo deve avere almeno 3 caratteri",
                "title.unique" => "Puoi avere un solo articolo con questo titolo",
                "price.required" => "Il prezzo è obbligatorio",
                "description.required" => "La descrizione è obbligatoria",
            ]
        );
        $this->user_id = Auth::user()->id;

        Announce::create($this->all());
        session()->flash("success", "Annuncio creato con successo");

        $this->reset();




    }
}
