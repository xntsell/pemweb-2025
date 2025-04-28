<?php

namespace App\Livewire;

use Livewire\Component;

class ShowHomePage extends Component {
public $footer;

    public function mount(){
        $this->footer = \App\Models\Footer::first();
    }
    public function render(){
        return view('livewire.show-home-page');
    }
}