<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table='messages';

    protected $fillable = [
      'nombre', 'email', 'telefono','textarea','category_id'
    ];


    public function user(){
      
      return $this->belongsTo(User::class);
    }

    public function customer ()
    {

    	return $this->belongsTo(User::class);
    }

    public function store(Request $request)
    {
        Message::create($request->all());
        return redirect()->route('message.index');

    }
}