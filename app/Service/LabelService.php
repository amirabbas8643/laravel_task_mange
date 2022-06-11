<?php
namespace App\Service;

use App\Label;
use Illuminate\Http\Request;

class LabelService
{
    /**
     * @param int $length
     */
    public function getLabels($length = 10)
    {
        return Label::paginate($length);
    }

    /**
     * @param Request $request
     * @param $user_id
     * @return array
     */
    protected function binding(Request $request): array
    {
        return [
            'label' => $request->get('label') ,
        ];
    }

    /**
     * @param Request $request
     * @return Label
     */
    public function createLabel(Request $request): Label
    {
        return Label::create($this->binding($request));
    }

    public function updateLabel(Request $request , Label $tabel)
    {
        return $tabel->update($this->binding($request));
    }

    public function delete(Label $tabel)
    {
        $tabel->delete();
    }
}