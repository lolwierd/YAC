<?php

  namespace App\Http\Livewire;

  use Illuminate\Support\Facades\Log;
  use Livewire\Component;

  class Calc extends Component
  {
    public $keys = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    public $operations = ["+", "-", "/", "*", "=", "AC"];

    public $first;
    public $second;
    public $op;
    public $ans = '0';

    public function mount(){
      $this->first = '0';
    }

    protected $listeners = ["number", "operator"];

    public function number($number){
      Log::info('NUM method called. With num: ' . $number . " First: " . $this->first . " Second: " . $this->second);
      if ($this->op == null) {
        $this->first = $this->first ? $number : $this->first . $number;
        $this->ans = $this->first;
      }
      else {
        $this->second = $this->second ? $number : $this->second . $number;
        $this->ans = $this->first . " " . $this->op . " " . $this->second;
      }
    }

    public function operator($op){
      if ($op === "=") {
        $this->equals();
        return;
      }
      Log::info('OP method called. With op: ' . $op . " First: " . $this->first . " Second: " . $this->second);
      $this->op = $op;
      $this->ans = $this->first . " " . $this->op . " ";
    }

    public function equals(){
      $fun = ["+" => 'add', "-" => 'subtract', "/" => 'divide', '*' => 'multiply', 'AC' => "clear"][$this->op];
      $this->$fun();
      $this->clear();
    }


    public function add(){
      $this->ans = (int) $this->first + (int) $this->second;
    }

    public function subtract(){
      $this->ans = (int) $this->first - (int) $this->second;
    }

    public function divide(){
      $this->ans = (float) $this->first / (float) $this->second;
    }

    public function multiply(){
      $this->ans = (int) $this->first * (int) $this->second;
    }

    public function clear(){
      $this->first = null;
      $this->second = null;
      $this->op = null;
    }


    public function render(){
      return view('livewire.calc');
    }
  }
