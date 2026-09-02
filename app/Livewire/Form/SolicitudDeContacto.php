<?php

namespace App\Livewire\Form;

use Livewire\Component;

use Illuminate\Support\Str;

use SoftTechMX\Log;
use Exception;

use App\Models\SolicitudDeContacto as PeticionDeContacto;

class SolicitudDeContacto extends Component
{
    public ?string $nombre;
    public ?string $asunto;
    public ?string $correo;
    public ?string $telefono;
    public ?string $mensaje;

    protected $rules = [
        'nombre' => 'required|max:100',
        'asunto' => 'required|max:100',
        'correo' => 'required|max:100',
        'telefono' => 'required|max:20',
        'mensaje' => 'required|max:500',
    ];

    protected $messages = [
        'nombre.required' => 'Es necesario que escriba su nombre.',
        'nombre.max' => 'El nombre no puede tener más de :max letras.',

        'asunto.required' => 'Es necesario que especifique el asunto.',
        'asunto.max' => 'La Descripcion del asunto no puede tener más de :max caracteres.',

        'correo.required' => 'El correo es obligatorio.',
        'correo.max' => 'El correo no puede tener más de :max letras.',

        'telefono.required' => 'El teléfono es obligatorio.',
        'telefono.max' => 'El teléfono no puede tener más de :max numeros.',

        'mensaje.required' => 'Es necesario que nos describa su problema.',
        'mensaje.max' => 'El mensaje no puede tener más de :max letras.',
    ];

    public function save()
    {
        $this->validate();

        try
        {
            $solicitud = new PeticionDeContacto();
            $solicitud->nombre   = Str::title($this->nombre);
            $solicitud->correo   = Str::lower($this->correo);
            $solicitud->telefono = Str::lower($this->telefono);
            $solicitud->asunto   = Str::title($this->asunto);
            $solicitud->mensaje  = $this->mensaje;
            $solicitud->save();

            $this->dispatch('alert-success', 'Se ha registrado su peticion de contacto');
            $this->reset();
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }

    public function render()
    {
        return view('livewire.form.solicitud-de-contacto');
    }
}
