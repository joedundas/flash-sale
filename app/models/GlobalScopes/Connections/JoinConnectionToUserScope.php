<?php



use Illuminate\Database\Query\Builder as BaseBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ScopeInterface;

class JoinConnectionToUserScope implements ScopeInterface
{

    public function apply(Builder $builder) {
        $builder->select(
            'connections.id as connectionId',
            'connections.created_at as connectionCreatedDate',
            'connections.userId_1 as initiatorUserId',
            'connections.userId_2 as receiverUserId',
            'connections.confirmed as confirmed',
            'iUser.firstName as initiatorFirstName',
            'iUser.lastName as initiatorLastName',
            'iUser.email as initiatorEmail',
            'rUser.firstName as receiverFirstName',
            'rUser.lastName as receiverLastName',
            'rUser.email as receiverEmail'

        )->join('users as iUser','connections.userId_1','=','iUser.id')->join('users as rUser','connections.userId_2','=','rUser.id');
        //$builder->where('userId','=',Auth::user()->id);
    }
    public function remove(Builder $builder) {
//        $query = $builder->getQuery();
//        foreach((array)$query->wheres as $key => $where) {
//
//            if($where['column'] == 'userId') {
//
//                unset($query->wheres[$key]);
//
//                $query->wheres = array_values($query->wheres);
//
//            }
//        }
    }
//    public function removeWhere(BaseBuilder $query,$key) {
//
//    }
//    public function removeBinding(BaseBuilder $query,$key) {
//
//    }
}