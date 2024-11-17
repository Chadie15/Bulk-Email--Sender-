<?php

namespace App\Imports;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Business;
use Maatwebsite\Excel\Concerns\ToModel;

class BusinessesImport implements ToCollection, ToModel
{
    /**
    * @param Collection $collection
    */
    private $current = 0;
    public function collection(Collection $collection)
    {
        
    }
    public function model(array $row)
    {
        $this->current++;
        if($this->current > 1)
        {
             $count = Business::where('email', '=', $row[1])->count();
             if(empty($count))
             {
                $businesses = new Business;
                $businesses->name = $row[0];
                $businesses->email =$row[1];
                $businesses->save();
             }
        }
    }
}
