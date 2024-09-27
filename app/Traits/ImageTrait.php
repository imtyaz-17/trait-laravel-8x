<?php
namespace App\Traits;
use Illuminate\Http\Request;

trait ImageTrait
{
    public function verifyAndUpload(Request $request, $fieldName='image', $directory='images')
    {
        if ($request->hasFile($fieldName)) {
            if (! $request->file($fieldName)->isValid()) {
                flash('Invalid image file')->error()->important();
                return redirect()->back()->withInput();
            }
            return request()->file($fieldName)->store($directory, 'public');
        }
        return null;
    }
}
