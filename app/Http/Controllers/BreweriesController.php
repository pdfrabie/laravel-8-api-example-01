<?php

namespace App\Http\Controllers;

use App\Services\Guzzle;
use App\Helpers\Helper;

class BreweriesController extends Controller
{
    public function __construct(private Guzzle $guzzle, private Helper $helper){}

    public function index() {
        $breweries = $this->guzzle->get('https://api.openbrewerydb.org/breweries');
        return $this->helper->nestAddress($breweries);
    }

    public function search($name) {
        $breweries = $this->guzzle->get('https://api.openbrewerydb.org/breweries?by_name='.$name);
        return $this->helper->nestAddress($breweries);
    }
}
