<?php

	class CoperateTitle extends Eloquent {
		/**
	     * Validation rules
	     */
		protected $table = 'coperate_titles';

	    public static $rules = array(
	    	'name' => 'required|alpha_dash',
	    	'SLA' => 'required|integer'
	    );


	}

