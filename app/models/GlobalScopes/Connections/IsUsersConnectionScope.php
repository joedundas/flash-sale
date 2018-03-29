<?php



use Illuminate\Database\Query\Builder as BaseBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ScopeInterface;

class IsUsersConnectionScope implements ScopeInterface
{

    public function apply(Builder $builder) {
        $builder->where(
          function($builder) {
              $builder->where('connections.userId_1','=',Auth::user()->id)->orWhere('connections.userId_2','=',Auth::user()->id);;
          }
        );
    }
    public function remove(Builder $builder) {
        $query = $builder->getQuery();
        foreach((array)$query->wheres as $key => $where) {

            if($where['column'] == 'connections.userId_1' || $where['column'] == 'connections.userId_2') {

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