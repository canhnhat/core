<?php

namespace NTCDev\Core\Repositories;

use Prettus\Repository\Eloquent\BaseRepository as BRE;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class BaseRepositoryEloquent.
 *
 * @package namespace NTCDev\Core\\Repositories;
 */
class BaseRepositoryEloquent extends BRE implements BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {

    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
