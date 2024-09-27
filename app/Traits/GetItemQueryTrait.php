<?php
namespace App\Traits;
use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;

trait GetItemQueryTrait
{
    public function getAllItem(): Collection|array
    {
        return Item::all();
    }
}
