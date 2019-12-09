<?php

namespace Modules\ValidationClient\Services;


class ValidationClientService {
	
	public function fields(){
		return config('validationclient.fields');
	}

	public function sample(){
		return config('validationclient.sample');
	}

}
