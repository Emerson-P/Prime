<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    public function HomePage(){
        return view('app.HomePage');
    }


    // $hgApi = new HgBrasilService();
    //     try {
    //         $financeData = $hgApi->getFinanceData();
            
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
}
