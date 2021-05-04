<?php

  namespace App\Http\Livewire;

  use Illuminate\Support\Facades\Log;
  use Livewire\Component;

  class Button extends Component
  {
    public $keyText;
    public $type;

    public function sendNumEvent(){
      Log::info('Emitting event number with arguments: ' . $this->keyText);
      $this->emit('number', $this->keyText);
    }

    public function sendOpEvent(){
      Log::info('Emitting event operator with arguments: ' . $this->keyText);
      $this->emit('operator', $this->keyText);
    }

    public function render(){
      return view('livewire.button');
    }
  }
