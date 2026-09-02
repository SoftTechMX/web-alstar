<div class="php-email-form">
	<div class="row gy-4">

		<div class="col-12">
			<label class="pb-2">
				Nombre Completo
			</label>

			<input class="form-control" type="text" wire:model="nombre">

			<x-form.error name="nombre" />
		</div>

		<div class="col-12 col-lg-6 col-md-6">
			<label class="pb-2">
				Correo
			</label>

			<input class="form-control" type="email" wire:model="correo">

			<x-form.error name="correo" />
		</div>

		<div class="col-12 col-lg-6 col-md-6">
			<label class="pb-2">
				Telefono
			</label>

			<input class="form-control" type="text" wire:model="telefono">

            <x-form.error name="telefono" />
		</div>

		<div class="col-12">
			<label class="pb-2">
                Asunto
            </label>

			<input class="form-control" wire:model="asunto" type="text">

            <x-form.error name="asunto" />
		</div>

		<div class="col-md-12">
			<label class="pb-2">
                Mensaje
            </label>

			<textarea class="form-control" wire:model="mensaje" rows="10"></textarea>

            <x-form.error name="mensaje" />
		</div>

		<div class="col-md-12 text-center">
			<div class="loading">Loading</div>
			<div class="error-message"></div>
			<div class="sent-message">Your message has been sent. Thank you!</div>

			<button type="submit" wire:click="save">
				Enviar Mensaje
			</button>
		</div>

	</div>
</div>
