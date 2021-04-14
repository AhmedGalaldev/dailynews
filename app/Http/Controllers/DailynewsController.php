<?php

namespace App\Http\Controllers;

use App\Servicies\DailynewsService;
use Illuminate\Http\Request;

class DailynewsController extends Controller
{
    protected $dailynewsService;

    public function __construct(DailynewsService $dailynewsService)
    {
        $this->dailynewsService = $dailynewsService;
    }
    
    public function index($agencyId,Request $request)
    {
      return $this->dailynewsService->index($agencyId,$request);
       
    }

   
}
