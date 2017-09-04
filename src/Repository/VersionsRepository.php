<?php
namespace Sahakavatar\Framework\Repository;

use Sahakavatar\Cms\Repositories\GeneralRepository;
use Sahakavatar\Framework\Models\Versions;

class VersionsRepository extends GeneralRepository
{

    public function model()
    {
        return new Versions();
    }

    public function updateWhere($id,$condition = "=",$data)
    {
        return $this->model()->where('id',$condition,$id)->update($data);
    }

    public function wherePluck(string $attribute,string $attrVal,string $key, string $value)
    {
        return $this->model->where($attribute,$attrVal)->pluck($key, $value);
    }
}