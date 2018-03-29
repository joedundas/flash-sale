<?php



use Illuminate\Database\Query\Builder as BaseBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ScopeInterface;

class IsUsersEventTagDefinitionScope implements ScopeInterface
{

    public function apply(Builder $builder) {
        $builder->where('userId','=',Auth::user()->id);
    }
    public function remove(Builder $builder) {
        $query = $builder->getQuery();
        foreach((array)$query->wheres as $key => $where) {

            if($where['column'] == 'userId') {

                unset($query->wheres[$key]);

                $query->wheres = array_values($query->wheres);

            }
        }
    }
//    public function removeWhere(BaseBuilder $query,$key) {
//
//    }
//    public function removeBinding(BaseBuilder $query,$key) {
//
//    }
}